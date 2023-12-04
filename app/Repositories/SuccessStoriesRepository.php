<?php

namespace App\Repositories;

use App\Interfaces\SuccessStoriesInterface;
use App\Models\SuccessStories;

class SuccessStoriesRepository implements SuccessStoriesInterface
{
public function getSuccessStories()
{
        // TODO: Implement getSuccessStories() method.
        return SuccessStories::all();
    }

    public function addSuccessStories($name, $email, $phone_number, $city, $image, $video_url, $story,$video_title,$video_description,$isActive)
{
    // TODO: Implement addSuccessStories() method.
    $success_story = new SuccessStories([
        'name' => $name,
        'email'=>$email,
        'phone_number'=>$phone_number,
        'city'=>$city,
        'images'=>$image,
        'video_url'=>$video_url,
        'video_title'=>$video_title,
        'video_description'=>$video_description,
        'story'=>$story,
        'is_active'=>$isActive,
    ]);

    $success_story->save();
    return $success_story;
}
public function getSuccessStory($id)
{
    // TODO: Implement editSuccessStory() method.
    return SuccessStories::where(["id"=>$id])->first();
}

public function updateSuccessStory($id, $name, $email, $phone_number, $city, $video_url, $story,$video_title,$video_description, $image=null,$isActive=null)
{

    // TODO: Implement updateSuccessStory() method.
    $success_story = SuccessStories::where(["id"=>$id])->first();
    $success_story->name=$name;
    $success_story->email=$email;
    $success_story->phone_number=$phone_number;
    $success_story->city=$city;
    $success_story->is_active=$isActive;
    if($image!= null)
    {
        $success_story->images=$image;
    }

    $success_story->video_url=$video_url;
    $success_story->story=$story;
    $success_story->video_title=$video_title;
    $success_story->video_description=$video_description;

    $success_story->save();
    return $success_story;

}

    public function deleteSuccessStory($id)
{
    // TODO: Implement deleteSuccessStory() method.
    return SuccessStories::where(["id"=>$id])->delete();
}

}
