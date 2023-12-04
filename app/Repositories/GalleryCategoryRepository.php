<?php

namespace App\Repositories;

use App\Interfaces\GalleryCategoryInterface;
use App\Models\GalleryCategory;

class GalleryCategoryRepository implements GalleryCategoryInterface
{
    public function getGalleryCatagories()
    {
        // TODO: Implement getSuccessStories() method.
        return GalleryCategory::all();
    }
//
    public function addGalleryCatagory($name)
    {
        // TODO: Implement addCourseCategories() method.
        $gallery_category = new GalleryCategory([
            'name' => $name,
        ]);
        $gallery_category->save();
        return $gallery_category;
    }

    public function getGalleryCatagory($id)
    {
        // TODO: Implement getCourseCategory() method.
        return GalleryCategory::where(["id"=>$id])->first();
    }

    public function updateGalleryCatagory($id, $name)
    {
        // TODO: Implement updateCourseCategories() method.
        $gallery_category = GalleryCategory::where(["id"=>$id])->update([
            'name' => $name,
        ]);
        return $gallery_category;
    }

    public function deleteGalleryCatagory($id)
    {
        // TODO: Implement deleteCourseCategories() method.
        return GalleryCategory::where(["id"=>$id])->delete();
    }
}
