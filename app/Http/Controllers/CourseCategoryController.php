<?php

namespace App\Http\Controllers;

use App\Interfaces\CourseCategoryInterface;
use App\Repositories\CourseCategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class CourseCategoryController extends Controller
{
    private CourseCategoryRepository $courseCategoryRepository;
    private CourseCategoryInterface $courseCategoryInterface;

    /**
     * @param CourseCategoryRepository $courseCategoryRepository
     * @param CourseCategoryInterface $courseCategoryInterface
     */
    public function __construct(CourseCategoryRepository $courseCategoryRepository, CourseCategoryInterface $courseCategoryInterface)
    {
        $this->courseCategoryRepository = $courseCategoryRepository;
        $this->courseCategoryInterface = $courseCategoryInterface;
    }

    public function viewCourseCategory(Request $request)
    {
        $course_category = $this->courseCategoryRepository->getCourseCategories();
        return view("admin.setup.course_category",["course_category"=>$course_category]);
    }
    public function addCourseCategory(Request $request)
    {

     try
     {
         $name=$request->get('name');
        $this->courseCategoryRepository->addCourseCategories(name:$name);

         return redirect()->route("view_course_category")->with("success", "Course Category added  successfully!");

     }
     catch(Exception $exception)
     {
         Log::error($exception);
         return redirect()->route("view_course_category")->with("error", "Something went wrong! Contact support");
     }
    }

    public function getCourseCategory($id)
    {
        try
        {
            $course_category = $this->courseCategoryRepository->getCourseCategory($id);

            return response()->json(['category'=>$course_category],200);
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return response()->json(["category" => null], 404);

        }
    }

    public function updateCourseCategory(Request $request)
    {
        try
        {
            $id= $request->get('id');
            $name = $request->get('cat_name');
            $this->courseCategoryRepository->updateCourseCategories(id:$id,name:$name);

            return redirect()->route("view_course_category")->with("success", "Course Category updated  successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_course_category")->with("error", "Something went wrong! Contact support");
        }

    }

    public function deleteCourseCategory($id)
    {
        try {
            $this->courseCategoryRepository->deleteCourseCategories($id);
            return redirect()->route("view_course_category")->with("success", "Course Category deleted  successfully!");
        }
        catch(Exception $exception)
        {

            Log::error($exception);
            return redirect()->route("view_course_category")->with("error", "This Category is associated with the course.Please update or delete Course Category ");
        }
    }
}
