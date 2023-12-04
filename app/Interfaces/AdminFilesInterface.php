<?php

namespace App\Interfaces;

interface AdminFilesInterface
{
    public function getRepositoryData();
    public function submitRepositoryData($title,$file,$categoryId);

    public function getRepositoryDataById($id);
    public function updateRepositoryData($id,$categoryId,$title=null,$file=null);
    public function destroyRepositoryData($id);

}
