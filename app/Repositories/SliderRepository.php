<?php

namespace App\Repositories;

use App\Interfaces\SliderInterface;
use App\Models\Slider;

class SliderRepository implements SliderInterface
{
    public function getSliderData()
    {
        // TODO: Implement getSliderData() method.
        return Slider::all();
    }

    public function addSliderData($image, $title, $description,$category)
    {
        // TODO: Implement addSliderData() method.
        $slider  = new Slider([
            'image'=>$image,
            'title'=>$title,
            'description'=>$description,
            'category'=>$category
        ]);
        $slider->save();
        return $slider;
    }
    public function getSliderById($id)
    {
        // TODO: Implement getSliderById() method.
        return Slider::where(['id'=>$id])->first();
    }
    public function updateSliderData($id, $title, $description,$category, $image=null)
    {
        // TODO: Implement updateSliderData() method.
        $slider = Slider::where(['id'=>$id])->first();
        if($image!=null)
        {
            $slider->image=$image;
        }
        $slider->title=$title;
        $slider->description=$description;
        $slider->category=$category;
        $slider->save();

        return $slider;
    }
    public function deleteSliderData($id)
    {
        // TODO: Implement deleteSliderData() method.
        return Slider::where(['id'=>$id])->delete();
    }
}
