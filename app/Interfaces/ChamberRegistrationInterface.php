<?php
 namespace App\Interfaces;

interface ChamberRegistrationInterface{
    public function viewAll();
    public function addData($chamberName,$email,$registrationNumber,$businessAddress);
    public function editData($id);
    public function updateData($id,$chamberName,$email,$registrationNumber,$businessAddress);
    public function deleteItem($id);
}
