<?php

namespace App\Interfaces;

interface CourseCategoryInterface
{

    public function getCourseCategories();
    public function addCourseCategories($name);
//
    public function getCourseCategory($id);
//
    public function updateCourseCategories($id,$name);
//
    public function deleteCourseCategories($id);


}
