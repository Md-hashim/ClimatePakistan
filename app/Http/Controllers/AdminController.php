<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Interfaces\SettingsInterface;
use App\Models\Message;
use App\Models\User;
use App\Repositories\SettingsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    private SettingsRepository $settingsRepository;
    private SettingsInterface $settings;

    /**
     * @param SettingsRepository $settingsRepository
     * @param SettingsInterface $settings
     */
    public function __construct(SettingsRepository $settingsRepository, SettingsInterface $settings)
    {
        $this->settingsRepository = $settingsRepository;
        $this->settings = $settings;
    }


   public function viewDashboard(Request $request)
   {
       if (!Auth::check()) {
           return redirect()->route("login_view");
       }
       $user = User::where(['id'=>Auth::id()])->first();
       return view("admin.dashboard.dashboard",['user'=>$user]);
   }
    public function viewSiteSettings(Request $request)
    {
        return view("admin.settings.view_settings");
    }
    public function addSiteSettings(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route("login_view");
        }
        $user = User::where(['id'=>Auth::id()])->first();
        $settings = $this->settingsRepository->getSettings();
        return view("admin.settings.add_settings",['setting'=>$settings,'user'=>$user]);
    }

    public function updateSiteSettings(Request $request)
    {

        try
        {
            $id= $request->get('id');
            $tag_line = $request->get('tag_line');
            $phone_number = $request->get('phone_number');
            $email_address = $request->get('email_address');
            $meta_title = $request->get('meta_title');
            $meta_description = $request->get('meta_description');
            $facebook = $request->get('facebook');
            $instagram = $request->get('instagram');
            $twitter = $request->get('twitter');
            $linkedIn = $request->get('linkedIn');
            $tiktok = $request->get('tiktok_link');
            $youtube = $request->get('youtube');

            $primary_color = $request->get('primary_color');
            $secondary_color = $request->get('secondary_color');
            $text_color = $request->get('text_color');
            $footerSection1 = $request->get('section_1_content');
            $footerSection2 = $request->get('section_2_content');

            $women_empowered = $request->get('women_empowered');
            $our_followers = $request->get('our_followers');
            $registered_chambers = $request->get('registered_chambers');
            $trainings = $request->get('trainings');


            if($logo_large = $request->file('logo_large'))
            {

                $helper = new Helper();
                $logo_large =$helper->storeImage($logo_large,"Website");
            }
            if($logo_small = $request->file('logo_small'))
            {
                $helper = new Helper();
                $logo_small=$helper->storeImage($logo_small,"Website");
            }
            if($fav_icon = $request->file('fav_icon'))
            {
                $helper = new Helper();
                $fav_icon =  $helper->storeImage($fav_icon,"Website");
            }
            if($banner_image = $request->file('banner_image'))
            {
                $helper = new Helper();
                $banner_image=$helper->storeImage($banner_image,"Website");

            }
            if($video = $request->file('video'))
            {
                $helper = new Helper();
                $video=$helper->storeVideo($video,"Website");
            }
            if($announcement_image = $request->file('announcement_image'))
            {
                $helper = new Helper();
                $announcement_image=$helper->storeImage($announcement_image,"Website");
            }

            if($request->get("announcementSwitch")=="true")
            {
                $announcement_status=1;
            }
            else
            {
                $announcement_status=0;
            }

        $announcement_url=$request->get('announcement_url');

            $landing_page_type = $request->get('landing_page_type');

            $this->settingsRepository->updateSiteSettings(id: $id, announcementImage: $announcement_image, announcementStatus: $announcement_status,announcementUrl: $announcement_url,
                tagLine: $tag_line, phoneNumber: $phone_number, emailAddress: $email_address,
                metaTitle: $meta_title, metaDescription: $meta_description, facebook: $facebook, instagram: $instagram, twitter: $twitter,
                linkedIn: $linkedIn, tiktok: $tiktok, primaryColor: $primary_color,
                secondaryColor: $secondary_color, textColor: $text_color, logoLarge: $logo_large, logoSmall: $logo_small,
                favIcon: $fav_icon, bannerImage: $banner_image, videoUrl: $video, landingPageType: $landing_page_type,
                footerSection1: $footerSection1, footerSection2: $footerSection2, womenEmpowered: $women_empowered, ourFollowers: $our_followers, registeredChambers: $registered_chambers, trainings: $trainings, youtube: $youtube);


            return redirect()->route("add_admin_site_settings")->with("success", "Settings updated  successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("add_admin_site_settings")->with("error", "Something went wrong! Contact support");
        }
    }


    public function viewAccountSettings()
    {
        if (!Auth::check()) {
            return redirect()->route("login_view");
        }
        $user = User::where(['id'=>Auth::id()])->first();

        return view("admin.accountSetting.account_setting",["user"=>$user]);
    }

    public function accountSettingsSave(Request $request)
    {

        if (!Auth::check()) {
            return redirect()->route("login_view");
        }
//        dd($request->get("profile_image"));
        if($image = $request->file('profile_image'))
        {
            $helper = new Helper();
            $image = $helper->storeImage($image,"Admin");
        }

        $user = User::where(['id'=>Auth::id()])->first();
        $user->name = $request->get("full_name");
        if($image!=null)
        {
            $user->profile_image = $image;
        }
        $user->save();
        Session::put('user', $user);
        return redirect()->route("view_admin_account_settings")->with("status", "Settings updated successfully!");
    }

    public function accountUpdatePassword(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route("login_view");
        }

        #Match The Old Password
        if (!Hash::check($request->get("old_password"), Auth()->user()->password)) {
            return back()->with("error", "Old password doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->get("new_password"))
        ]);


        return redirect()->route("view_admin_account_settings")->with("status", "Password updated successfully!");
    }

    public function viewMessages()
    {
        $messages = Message::all();
        return view("admin.message.view_message",["messages"=>$messages]);
    }

    public function deleteMessage($id)
    {
        try {
            Message::where(["id" => $id])->delete();
            return redirect()->route("view_messages")->with("success", "faqs deleted successfully");
        } catch (\PHPUnit\Exception $exception) {
            return redirect()->route("view_messages")->with("error", "Something went wrong");
        }
    }










}
