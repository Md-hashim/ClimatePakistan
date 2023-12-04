<?php

namespace App\Repositories;

use App\Interfaces\AdminFilesInterface;
use App\Models\AdminRepository;


class AdminFilesRepository implements AdminFilesInterface
{

    public function getRepositoryData()
    {
        // TODO: Implement getRepositoryData() method.
        return AdminRepository::all();
    }

    public function submitRepositoryData($title,$file,$categoryId)
    {
        // TODO: Implement submitCourseItem() method.
        $repository=new AdminRepository([
            'title'=>$title,
            'file'=>$file,
            'cat_id'=>$categoryId,
        ]);
        $repository->save();
        return $repository;
    }

    public function getRepositoryDataById($id)
    {
        // TODO: Implement getCourseItemById() method.
        return AdminRepository::where(['id'=>$id])->get();
    }

    public function updateRepositoryData($id,$categoryId,$title=null,$file=null)
    {
        // TODO: Implement updateCourseItem() method.
        $repository=AdminRepository::where(['id'=>$id])->first();
        if($title!=null){
            $repository->title = $title;
        }

        if($file!= null){
            $repository->file = $file;
        }
        if($categoryId!= null){
            $repository->cat_id = $categoryId;
        }
        $repository->save();

        return $repository;
    }

    public function destroyRepositoryData($id)
    {
        return AdminRepository::where(['id'=>$id])->delete();
    }
}
