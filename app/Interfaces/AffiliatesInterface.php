<?php

namespace App\Interfaces;

interface AffiliatesInterface{
    public function viewAll();
    public function addData($title,$icon,$description);
    public function editData($id);
    public function updateData($id,$title,$icon=null,$description=null);
    public function deleteItem($id);
}
