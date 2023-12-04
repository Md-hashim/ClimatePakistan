<?php

namespace App\Repositories;

use App\Interfaces\RepositoryCategoryInterface;
use App\Models\RepositoryCategory;



class RepositoryCategoryRepository implements RepositoryCategoryInterface
{
    public function getRepositoryCategories()
    {
        // TODO: Implement getSuccessStories() method.
return RepositoryCategory::all();
    }
//
    public function addRepositoryCategories($name)
    {
        // TODO: Implement addCourseCategories() method.
        $category = new RepositoryCategory([
            'name' => $name,
        ]);
        $category->save();
        return $category;
    }

    public function getRepositoryCategory($id)
    {
        // TODO: Implement getCourseCategory() method.
        return RepositoryCategory::where(["id"=>$id])->first();
    }

    public function updateRepositoryCategory($id, $name)
    {
        // TODO: Implement updateCourseCategories() method.
        $course_category = RepositoryCategory::where(["id"=>$id])->update([
            'name' => $name,
        ]);
        return $course_category;
    }

    public function deleteRepositoryCategory($id)
    {
        // TODO: Implement deleteCourseCategories() method.
        return RepositoryCategory::where(["id"=>$id])->delete();
    }

}
