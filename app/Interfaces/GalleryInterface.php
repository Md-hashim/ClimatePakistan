<?php

namespace App\Interfaces;

interface GalleryInterface
{

    public function getGalleryData();
    public function addGalleryData($title,$description, $image,$video,$type,$cat_id);

    public function getGalleryById($id);

    public function updateGalleryData($id,$title,$description,$cat_id,$type,$image=null,$video=null);

    public function deleteGallery($id);


}
