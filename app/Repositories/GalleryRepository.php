<?php

namespace App\Repositories;

use App\Interfaces\GalleryInterface;
use App\Models\Gallery;

class GalleryRepository implements GalleryInterface
{
    public function getGalleryData()
    {
        // TODO: Implement getGalleryData() method.
        return Gallery::all();
    }

    public function addGalleryData($title, $description, $image,$video,$type, $cat_id)
    {

        // TODO: Implement addGalleryData() method.
        $gallery = new Gallery([
            'title'=>$title,
            'description'=>$description,
            'image' =>$image,
            'video'=>$video,
            'type'=>$type,
            'cat_id'=>$cat_id
        ]);
        $gallery->save();

        return $gallery;
    }

    public function getGalleryById($id)
    {
        // TODO: Implement getGalleryById() method.
        return Gallery::where(['id'=>$id])->first();
    }

    public function updateGalleryData($id, $title, $description, $cat_id,$type, $image=null,$video=null)
    {
        // TODO: Implement updateGalleryData() method.
        $gallery= Gallery::where(['id'=>$id])->first();
        $gallery->title=$title;
        $gallery->description=$description;
        $gallery->type=$type;
        if($image!=null)
        {
            $gallery->image=$image;
        }
        if($video!=null)
        {
            $gallery->video=$video;
        }
        $gallery->cat_id=$cat_id;
        $gallery->save();
        return $gallery;
    }

    public function deleteGallery($id)
    {
        // TODO: Implement deleteGallery() method.
        return Gallery::where(['id'=>$id])->delete();
    }
}
