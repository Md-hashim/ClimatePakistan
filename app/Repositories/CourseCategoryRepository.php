<?php

namespace App\Repositories;

use App\Interfaces\CourseCategoryInterface;
use App\Models\CourseCategory;

class CourseCategoryRepository implements CourseCategoryInterface
{
    public function getCourseCategories()
    {
        // TODO: Implement getSuccessStories() method.
        return CourseCategory::all();
    }
//
    public function addCourseCategories($name)
    {
        // TODO: Implement addCourseCategories() method.
        $course_category = new CourseCategory([
            'name' => $name,
        ]);
        $course_category->save();
        return $course_category;
    }

    public function getCourseCategory($id)
    {
        // TODO: Implement getCourseCategory() method.
        return CourseCategory::where(["id"=>$id])->first();
    }

    public function updateCourseCategories($id, $name)
    {
        // TODO: Implement updateCourseCategories() method.
        $course_category = CourseCategory::where(["id"=>$id])->update([
            'name' => $name,
        ]);
        return $course_category;
    }

    public function deleteCourseCategories($id)
    {
        // TODO: Implement deleteCourseCategories() method.
        return CourseCategory::where(["id"=>$id])->delete();
    }

}
