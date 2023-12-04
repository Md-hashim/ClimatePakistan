<?php

namespace App\Interfaces;

interface SuccessStoriesInterface
{

public function getSuccessStories();
public function addSuccessStories($name,$email,$phone_number,$city,$image,$video_url,$story,$video_title,$video_description,$isActive);

public function getSuccessStory($id);

public function updateSuccessStory($id,$name,$email,$phone_number,$city,$video_url,$story,$video_title,$video_description,$image=null,$isActive=null);

public function deleteSuccessStory($id);


}
