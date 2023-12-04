<?php

namespace App\Interfaces;

interface GalleryCategoryInterface
{

    public function getGalleryCatagories();
    public function addGalleryCatagory($name);

    public function getGalleryCatagory($id);

    public function updateGalleryCatagory($id,$name);

    public function deleteGalleryCatagory($id);


}
