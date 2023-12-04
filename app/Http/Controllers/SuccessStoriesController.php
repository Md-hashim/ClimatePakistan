<?php

namespace App\Http\Controllers;

use App\Models\SuccessStories;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Repositories\SuccessStoriesRepository;
use App\Interfaces\SuccessStoriesInterface;
use Exception;
use Illuminate\Support\Facades\Log;

class SuccessStoriesController extends Controller
{
    private SuccessStoriesRepository $successStoriesRepository;
    private SuccessStoriesInterface $successStoriesInterface;

    /**
     * @param SuccessStoriesRepository $successStoriesRepository
     * @param SuccessStoriesInterface $successStoriesInterface
     */
    public function __construct(SuccessStoriesRepository $successStoriesRepository, SuccessStoriesInterface $successStoriesInterface)
    {
        $this->successStoriesRepository = $successStoriesRepository;
        $this->successStoriesInterface = $successStoriesInterface;
    }

    public function viewSuccessStories(Request $request)
    {
        $success_stories = $this->successStoriesRepository->getSuccessStories();
        return view("admin.successStories.view_success_stories",["success_stories"=>$success_stories]);
    }
    public function addSuccessStories(Request $request)
    {

        return view("admin.successStories.add_success_stories");
    }

    public function submitSuccessStories(Request $request)
    {
        try
        {
            $name=$request->get('name');
            $email=$request->get('email');
            $phone_number=$request->get('phone_number');
            $city=$request->get('city');
            $image=$request->get('story_image');
            $video_url=$request->get('video_url');
            $story=$request->get('story');
            $video_title=$request->get('video_title');
            $video_description=$request->get('video_description');
            $story=$request->get('story');
            if($status=$request->get('status')=="Publish")
            {
                $is_active=1;
            }else
            {
                $is_active=0;
            }
            if($image = $request->file('story_image'))
            {
                $helper = new Helper();
                $image = $helper->storeImage($image,"Success Stories");
            }
            $this->successStoriesRepository->addSuccessStories(name: $name,email: $email,phone_number: $phone_number,city: $city,image: $image,video_url: $video_url,story: $story,video_title: $video_title,video_description: $video_description,isActive:$is_active);
            return redirect()->route("view_admin_success_stories")->with("success", "Success Story added successfully!");
        }
        catch(Exception $exception)
        {
//            dd($exception);
            Log::error($exception);
            return redirect()->route("add_admin_success_stories")->with("error", "Something went wrong! Contact support");
        }
    }

    public function editSuccessStory($id)
    {
    $success_story = $this->successStoriesRepository->getSuccessStory($id);
    return view('admin.successStories.edit_success_stories',['success_story'=>$success_story]);

    }

    public function updateSuccessStory(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $name=$request->get('name');
            $email=$request->get('email');
            $phone_number=$request->get('phone_number');
            $city=$request->get('city');
            $image=$request->get('story_image');
            $video_url=$request->get('video_url');
            $story=$request->get('story');
            $video_title=$request->get('video_title');
            $video_description=$request->get('video_description');
            if($status=$request->get('status')=="Publish")
            {
                $is_active=1;
            }else
            {
                $is_active=0;
            }

            if($image = $request->file('story_image'))
            {

                $helper = new Helper();
                $image = $helper->storeImage($image,"Success Stories");
            }
            $this->successStoriesRepository->updateSuccessStory(id: $id, name: $name, email: $email, phone_number: $phone_number, city: $city, video_url: $video_url, story: $story, video_title: $video_title, video_description: $video_description, image: $image, isActive: $is_active);
            return redirect()->route("view_admin_success_stories")->with("success", "Success Story updated  successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);

            return redirect()->route("add_admin_success_stories")->with("error", "Something went wrong! Contact support");
        }
    }

    public function deleteSuccessStory($id)
    {
        try {
            $this->successStoriesRepository->deleteSuccessStory($id);
            return redirect()->route("view_admin_success_stories")->with("success", "Success Story deleted  successfully!");
        }
        catch (Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("add_admin_success_stories")->with("error", "Something went wrong! Contact support");
        }
    }

    public function getDashboardCounts()
    {
        $totalSuccessStories = SuccessStories::count();
        $postedSuccessStoriesCount = SuccessStories::where('is_active', 1)->count();
        $pendingSuccessStoriesCount = SuccessStories::where('is_active', 0)->count();

        return response()->json([
            'totalSuccessStories' => $totalSuccessStories,
            'postedSuccessStoriesCount' => $postedSuccessStoriesCount,
            'pendingSuccessStoriesCount' => $pendingSuccessStoriesCount,
        ]);
    }

}
