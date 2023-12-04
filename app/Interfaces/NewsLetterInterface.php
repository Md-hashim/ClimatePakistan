<?php

namespace App\Interfaces;

interface NewsLetterInterface{
    public function viewAll();
    public function addData($email);
    public function editData($id);
    public function updateData($id,$email);
    public function deleteItem($id);
}
