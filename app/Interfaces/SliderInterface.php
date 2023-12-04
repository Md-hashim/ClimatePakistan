<?php

namespace App\Interfaces;

interface SliderInterface
{

    public function getSliderData();
    public function addSliderData($image,$title,$description,$category);

    public function getSliderById($id);

    public function updateSliderData($id,$title,$description,$category,$image=null);

    public function deleteSliderData($id);


}
