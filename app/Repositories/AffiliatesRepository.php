<?php

namespace App\Repositories;
use App\Interfaces\AffiliatesInterface;
use App\Models\Affiliates;

class AffiliatesRepository implements AffiliatesInterface{

    public function viewAll()
    {
        // TODO: Implement viewAll() method.
        return Affiliates::all();
    }

    public function addData($title, $icon, $description)
    {
        // TODO: Implement addData() method.
        $affiliates=new Affiliates([
            'title'=>$title,
            'icon'=>$icon,
            'description'=>$description
        ]);
        $affiliates->save();
        return $affiliates;
    }

    public function editData($id)
    {
        // TODO: Implement editData() method.
        return Affiliates::where(['id'=>$id])->get();
    }

    public function updateData($id, $title, $icon=null, $description=null)
    {
        // TODO: Implement updateData() method.
        $affiliates = Affiliates::where(['id'=>$id])->first();
        $affiliates->title=$title;
        $affiliates->description=$description;
        if($icon!=null)
        {
            $affiliates->icon=$icon;
        }
        $affiliates->save();
        return $affiliates;
    }

    public function deleteItem($id)
    {
        // TODO: Implement deleteItem() method.

        return Affiliates::where(['id'=>$id])->delete();
    }
}
