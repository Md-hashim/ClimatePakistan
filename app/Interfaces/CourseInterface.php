<?php

namespace App\Interfaces;

interface CourseInterface
{

    public function getCourseData();
    public function addCourseData($title,$image,$course_cat_id,$shortDescription,$description,$isActive);

    public function getCourseById($id);

    public function updateCourseData($id,$title,$course_cat_id,$shortDescription,$description,$image=null,$isActive=null);

    public function deleteCourse($id);

    public function submitCourseItem($title,$image,$document,$videoUrl,$courseId,$type,$video);

    public function getCourseItemById($id);
    public function updateCourseItem($id,$type,$title=null,$image=null,$document=null,$videoUrl=null,$video=null);
    public function destroyCourseItem($id);

}
