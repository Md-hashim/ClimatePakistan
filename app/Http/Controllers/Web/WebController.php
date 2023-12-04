<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutTDAP;
use App\Models\AboutWEDIV;
use App\Models\Community;
use App\Models\ContactUs;
use App\Models\CoureseItem;
use App\Models\Course;
use App\Models\Events;
use App\Models\Faqs;
use App\Models\FrameWork;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Message;
use App\Models\News;
use App\Models\Offices;
use App\Models\Settings;
use App\Models\SuccessStories;
use App\Models\Team;
use App\Models\WEAcademy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mockery\Exception;

class WebController extends Controller
{
    public function index(){
        $settings = Settings::first();

        $galleries = Gallery::with('category')->get();

        $groupedGalleries = $galleries->groupBy('cat_id');

        $sortedGroupedGalleries = $groupedGalleries->map(function ($group) {
            return $group->sortByDesc(function ($gallery) {
                return $gallery->created_at;
            })->take(3);
        });

        $sortedGroupedGalleries = $sortedGroupedGalleries->sortBy(function ($group, $key) use ($groupedGalleries) {
            return $groupedGalleries[$key]->first()->category->name;
        });


        $galleryVideos = Gallery::where(["type"=>"video"])->latest()
            ->take(3)
            ->get();

        $categories = GalleryCategory::orderBy('name')->get();
        $stories = SuccessStories::where(["is_active"=>true])->take(4)->get();
        $news = News::where(["status"=>"Published"])->take(3)->get();
        $currentDateTime = Carbon::now();
        $events = Events::where('date', '>=', $currentDateTime)->where(["is_active"=>true])
            ->orderBy('date', 'asc')
            ->take(10)
            ->get();

        $trainings = Course::where(["is_active"=>true])->take(10)->get();
        $context = [
            "settings"=>$settings,
            "galleries"=>$sortedGroupedGalleries,
            "categories"=>$categories,
            "stories"=>$stories,
            "events"=>$events,
            "trainings"=>$trainings,
            "news"=>$news,
            "galleryVideos"=>$galleryVideos,

        ];
        return view("web.index", $context);
    }
    public function aboutTDAP(){
        $settings = Settings::first();
        $about = AboutTDAP::first();

        return view("web.about_tdap", ["about"=>$about,"settings"=>$settings,]);
    }
    public function aboutWETDAP(){
        $settings = Settings::first();
        $weDiv = AboutWEDIV::first();
        return view("web.about_wetdap", ["weDiv"=>$weDiv,"settings"=>$settings,]);
    }
    public function ourTeam(){
        $settings = Settings::first();
        $teams = Team::all();
        return view("web.our_team", ["teams"=>$teams,"settings"=>$settings,]);
    }
    public function startYourBusiness(){
        $settings = Settings::first();
        $tabs = WEAcademy::where(["page"=>"Start Your Business"])->get();
        return view("web.start_your_business",["settings"=>$settings,"tabs"=>$tabs]);
    }
    public function financingAndFunding(){
        $settings = Settings::first();
        $tabs = WEAcademy::where(["page"=>"Financing & Funding"])->get();
        return view("web.financing_and_funding",["settings"=>$settings,"tabs"=>$tabs]);
    }

    public function legalAndTaxation(){
        $settings = Settings::first();
        $tabs = WEAcademy::where(["page"=>"Legal and Taxation"])->get();
        return view("web.legal_taxation",["settings"=>$settings,"tabs"=>$tabs]);
    }

    public function chamberRegistration(){
        $settings = Settings::first();
        $tabs = WEAcademy::where(["page"=>"Registration With Chamber"])->get();
        return view("web.chamber_registration",["settings"=>$settings, "tabs"=>$tabs]);
    }

    public function community(){
        $settings = Settings::first();
        $community = Community::all();
        return view("web.community",["settings"=>$settings,"community"=>$community]);
    }

    public function faqs(){
        $settings = Settings::first();
        $faqs = Faqs::all();
        return view("web.faqs",["settings"=>$settings,"faqs"=>$faqs]);
    }

    public function contactUs(){
        $settings = Settings::first();
        $contact = ContactUs::first();
        return view("web.contact_us",["settings"=>$settings,"contact"=>$contact]);
    }

    public function entrepreneurshipRegistration(){
        $settings = Settings::first();
        return view("web.registration",["settings"=>$settings,]);
    }


    public function allEvents(){
        $settings = Settings::first();
        $events = Events::where(["is_active"=>true])->paginate(10);
        return view("web.all_events", ["events"=>$events,"settings"=>$settings,]);
    }

    public function eventDetails($title,$id){
        $settings = Settings::first();
        $event = Events::where(["id"=>$id])->first();
        return view("web.event_details", ["event"=>$event,"settings"=>$settings,]);
    }


    public function allNews(){
        $news = News::where(["status"=>"Published"])->paginate(6);
        $settings = Settings::first();
        return view("web.all_news", ["news"=>$news,"settings"=>$settings,]);
    }

    public function newsDetails(Request $request, $slug){
        $news = News::where(["slug"=>$slug])->first();
        $latestNews = News::orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        $settings = Settings::first();
        return view("web.news_details", ["news"=>$news,"settings"=>$settings,"latestNews"=>$latestNews]);
    }

    public function allStories(){
        $settings = Settings::first();
        $stories = SuccessStories::where(["is_active"=>true])->paginate(10);
        return view("web.all_stories", ["stories"=>$stories,"settings"=>$settings,]);
    }

    public function storyDetails($id){
        $settings = Settings::first();
        $story = SuccessStories::where(["id"=>$id])->first();
        return view("web.story_details", ["story"=>$story,"settings"=>$settings,]);
    }

    public function allTrainings(){
        $settings = Settings::first();
        $trainings = Course::where(["is_active"=>true])->paginate(6);
        return view("web.all_trainings", ["trainings"=>$trainings,"settings"=>$settings,]);
    }

    public function trainingDetails($title,$id){
        $settings = Settings::first();
        $training = Course::where(["id"=>$id])->first();
        $trainingItems = CoureseItem::where(["course_id"=>$id])->get();
//        dd($trainingItems);
        return view("web.training_details", ["training"=>$training,"settings"=>$settings,"trainingItems"=>$trainingItems]);
    }

    public function mous(){
        $settings = Settings::first();
        return view("web.mous",["settings"=>$settings,]);
    }
    public function collaborations(){
        $settings = Settings::first();
        return view("web.collaboration",["settings"=>$settings,]);
    }
    public function annualBusinessPlan(){
        $settings = Settings::first();
        return view("web.annual_business_plan",["settings"=>$settings,]);
    }

    public function test(){
        $settings = Settings::first();
        return view("layouts.web_master");
    }

    public function framework()
    {
        $settings = Settings::first();
        $framework=FrameWork::first();
        return view("web.framework",["settings"=>$settings,"framework"=>$framework]);
    }

    public function galleries()
    {
        $settings = Settings::first();
        $categories = GalleryCategory::orderBy('name')->get();

        $galleries = Gallery::with('category')->get();

        $groupedGalleries = $galleries->groupBy('cat_id');

        $sortedGroupedGalleries = $groupedGalleries->map(function ($group) {
            return $group->sortByDesc(function ($gallery) {
                return $gallery->created_at;
            });
        });

        $sortedGroupedGalleries = $sortedGroupedGalleries->sortBy(function ($group, $key) use ($groupedGalleries) {
            return $groupedGalleries[$key]->first()->category->name;
        });


        $galleryVideos = Gallery::where(["type"=>"video"])->latest()
            ->get();



        return view("web.galleries",["settings"=>$settings, "galleries"=>$sortedGroupedGalleries, "galleryVideos"=>$galleryVideos,"categories"=>$categories]);
    }

    public function submitMessageForm(Request $request)
    {
        try {
            $name = $request->get('userName');
            $email = $request->get('email');
            $description = $request->get('message');

            $message = new Message([
                "name" => $name,
                "email" => $email,
                "description" => $description,
            ]);

            $message->save();
            return redirect()->back()->with('success', 'Your message submitted successfully.');

        } catch (Exception $exception) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again!');
        }
    }

    public function viewAllOffices(){
        $settings = Settings::first();
        $offices = Offices::all();
        return view("web.offices",["settings"=>$settings, "offices"=>$offices]);
    }
}
