<?php

namespace App\Repositories;

use App\Interfaces\CourseInterface;
use App\Models\CoureseItem;
use App\Models\Course;

class CourseRepository implements CourseInterface
{
    public function getCourseData()
    {
        // TODO: Implement getCourseData() method.
        return Course::all();
    }

    public function addCourseData($title, $image,  $course_cat_id,$shortDescription, $description,$isActive)
    {
        // TODO: Implement addCourseData() method.
        $course = new Course([
            'title'=>$title,
            'image'=>$image,
            'cat_id'=>$course_cat_id,
            'description'=>$description,
            'short_description'=>$shortDescription,
            'is_active'=>$isActive
        ]);
        $course->save();
        return $course;
    }

    public function getCourseById($id)
    {
        // TODO: Implement getCourseById() method.
        return Course::where(['id'=>$id])->first();
    }

    public function updateCourseData($id, $title,  $course_cat_id, $shortDescription,$description, $image=null,$isActive=null)
    {
        // TODO: Implement updateCourseData() method.
        $course = Course::where(['id'=>$id])->first();
        $course->title=$title;
        $course->is_active=$isActive;
        if($image!=null)
        {
            $course->image=$image;
        }



        $course->cat_id=$course_cat_id;
        $course->description=$description;
        $course->short_description=$shortDescription;
        $course->save();
        return $course;
    }

    public function deleteCourse($id)
    {
        // TODO: Implement deleteCourse() method.
        return Course::where(['id'=>$id])->delete();
    }

    public function submitCourseItem($title, $image, $document, $videoUrl, $courseId,$type,$video)
    {

        // TODO: Implement submitCourseItem() method.
        $course_item=new CoureseItem([
            'title'=>$title,
            'image'=>$image,
            'document'=>$document,
            'video_url'=>$videoUrl,
            'course_id'=>$courseId,
            'video'=>$video,
            'type'=>$type,
        ]);
        $course_item->save();

        return $course_item;
    }

    public function getCourseItemById($id)
    {
        // TODO: Implement getCourseItemById() method.
        return CoureseItem::where(['course_id'=>$id])->get();
    }

    public function updateCourseItem($id,$type,$title=null,$image=null,$document=null,$videoUrl=null,$video=null)
    {
        // TODO: Implement updateCourseItem() method.
        $item_update=CoureseItem::where(['id'=>$id])->first();
        if($title!=null){
            $item_update->title = $title;
        }

        if($image!= null){
            $item_update->image = $image;
        }
        if($document!= null){
            $item_update->document = $document;
        }
        if($video!= null){
            $item_update->video = $video;
        }
        $item_update->video_url = $videoUrl;
        $item_update->type = $type;
        $item_update->save();

        return $item_update;
    }

    public function destroyCourseItem($id)
    {
        return CoureseItem::where(['id'=>$id])->delete();
    }
}
