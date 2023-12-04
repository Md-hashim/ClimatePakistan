<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Interfaces\CourseCategoryInterface;
use App\Interfaces\CourseInterface;
use App\Models\CoureseItem;
use App\Models\Course;
use App\Repositories\CourseCategoryRepository;
use App\Repositories\CourseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class CourseController extends Controller
{

    private CourseRepository $courseRepository;
    private CourseInterface $courseInterface;
    private CourseCategoryRepository $courseCategoryRepository;

    private CourseCategoryInterface $courseCategoryInterface;

    /**
     * @param CourseRepository $courseRepository
     * @param CourseInterface $courseInterface
     * @param CourseCategoryRepository $courseCategoryRepository
     * @param CourseCategoryInterface $courseCategoryInterface
     */
    public function __construct(CourseRepository $courseRepository, CourseInterface $courseInterface, CourseCategoryRepository $courseCategoryRepository, CourseCategoryInterface $courseCategoryInterface)
    {
        $this->courseRepository = $courseRepository;
        $this->courseInterface = $courseInterface;
        $this->courseCategoryRepository = $courseCategoryRepository;
        $this->courseCategoryInterface = $courseCategoryInterface;
    }

    public function viewCourses(Request $request)
    {
        $courses = $this->courseRepository->getCourseData();
        return view("admin.courses.view_courses",['courses'=>$courses]);
    }

    public function addCourses(Request $request)
    {
        $categories = $this->courseCategoryRepository->getCourseCategories();
        return view("admin.courses.add_courses",['categories'=>$categories]);
    }

    public function submitCourse(Request $request)
    {
        try
        {
            $image = $request->get('image');
            $title = $request->get('title');
            $description=$request->get('description');
            $shortDescription=$request->get('short_description');
            $cat_id = $request->get('cat_id');

            if($status=$request->get('status')=="Publish")
            {
                $is_active=1;
            }else
            {
                $is_active=0;
            }
            if($image=$request->file('image'))
            {
                $helper= new Helper();
                $image= $helper->storeImage($image,'Slider');
            }
            $this->courseRepository->addCourseData(title: $title,image: $image,course_cat_id: $cat_id,shortDescription:$shortDescription,description: $description,isActive: $is_active);
            return redirect()->route("view_admin_courses")->with("success", "Slider data added successfully!");
        }
        catch (Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_admin_courses")->with("error", "Something went wrong! Contact support");
        }
    }

    public function editSliderData($id)
    {
        $course=$this->courseRepository->getCourseById($id);
        $categories = $this->courseCategoryRepository->getCourseCategories();
        return view("admin.courses.edit_course",['course'=>$course,'categories'=>$categories]);
    }

    public function updateCourse(Request $request)
    {
        try
    {
        $id = $request->get('id');
        $image = $request->get('image');
        $title = $request->get('title');
        $description=$request->get('description');
        $cat_id = $request->get('cat_id');
        $shortDescription=$request->get('short_description');

        if($status=$request->get('status')=="Publish")
        {
            $is_active=1;
        }else
        {
            $is_active=0;
        }
        if($image=$request->file('image'))
        {
            $helper= new Helper();
            $image= $helper->storeImage($image,'Slider');
        }
        $this->courseRepository->updateCourseData(id: $id, title: $title, course_cat_id: $cat_id,shortDescription: $shortDescription, description: $description, image: $image, isActive: $is_active);
        return redirect()->route("view_admin_courses")->with("success", "Course updated successfully!");
    }
    catch (Exception $exception)
    {
        Log::error($exception);
        return redirect()->route("view_admin_courses")->with("error", "Something went wrong! Contact support");
    }
    }

    public function destroyCourse($id)
    {
        try
        {
            $this->courseRepository->deleteCourse($id);
            return redirect()->route("view_admin_courses")->with("success", "Course deleted successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_admin_courses")->with("error", "Something went wrong! Contact support");
        }
    }

    public function submitCourseItem(Request $request)
    {
//        try
//        {
            $id=$request->get('id');

            $title = $request->get('title');
            $video_url = $request->get('video_url');
            $type = $request->get('item_type');
            $image = [];
            $document = [];
            if($request->hasfile('image'))
            {
                foreach ($request->file('image') as $imagesFile)
                {
                    $helper= new Helper();
                    $image[]= $helper->storeImage($imagesFile,'Course Item');
                }

            }
            if($request->hasfile('document'))
            {
                foreach($request->file('document') as $documentFile)
                {
                    $helper= new Helper();
                    $document[]= $helper->storeFile($documentFile,'Course Item');
                }

            }
            if($video=$request->file('video'))
            {
                $helper= new Helper();
                $video= $helper->storeVideo($video,'Course Item');

//                dd($video);

            }



            if($type=="image")
            {
                foreach($image as $img )
                {
                    $this->courseRepository->submitCourseItem(title: $title, image: $img, document: null, videoUrl: $video_url, courseId: $id,type: $type,video: null);

                }
            }

            else if($type=="document")
            {
                foreach($document as $doc )
                {
                    $this->courseRepository->submitCourseItem(title: $title, image: null, document: $doc, videoUrl: $video_url, courseId: $id,type: $type,video: null);

                }
            }
            else{
                $this->courseRepository->submitCourseItem(title: $title, image: null, document: null, videoUrl: $video_url, courseId: $id,type: $type,video: $video);
            }


            return redirect()->route("view_admin_courses")->with("success", "Course item added successfully!");
//        }
//        catch (Exception $exception)
//        {
//            Log::error($exception);
//            return redirect()->route("view_admin_courses")->with("error", "Something went wrong! Contact support");
//        }
    }

    public function viewCourseItem($id)
    {

        $course_item = $this->courseRepository->getCourseItemById($id);

        return view("admin.courses.view_course_item",['course_item'=>$course_item]);
    }

    public function updateCourseItem(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $title = $request->get('title');
            $image=$request->get('image');
            $document = $request->get('document');
            $video_url = $request->get('video_url');
            $course_id = $request->get('course_id');
            $type = $request->get('item_type');
            if($image=$request->file('image'))
            {
                $helper= new Helper();
                $image= $helper->storeImage($image,'Course Item');
            }
            if($document=$request->file('document'))
            {
                $helper= new Helper();
                $image= $helper->storeFile($document,'Course Item');
            }
            if($video=$request->file('video'))
            {
                $helper= new Helper();
                $video= $helper->storeVideo($video,'Course Item');
            }
            $this->courseRepository->updateCourseItem(id: $id, type: $type, title: $title, image: $image, document: $document, videoUrl: $video_url, video: $video);
            return redirect()->route("view_admin_course_item",['id'=>$course_id])->with("success", "Slider data added successfully!");
        }
        catch (Exception $exception)
        {

            Log::error($exception);
            return redirect()->route("view_admin_course_item",['id'=>$course_id])->with("error", "Something went wrong! Contact support");
        }
    }

    public function destroyCourseItem($id)
    {

        try
        {
            $this->courseRepository->destroyCourseItem($id);
            return redirect()->route("view_admin_courses")->with("success", "Course Item deleted successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_admin_courses")->with("error", "Something went wrong! Contact support");
        }
    }

    public function CoursesCount()
    {
        $totalCourses = Course::count();
        $postedCourses = Course::where(['is_active'=> "1"])->count();
        $pendingCourses = Course::where(['is_active'=> "0"])->count();

        return response()->json([
            'totalCourses' => $totalCourses,
            'postedCourses' => $postedCourses,
            'pendingCourses' => $pendingCourses,
        ]);
    }
}
