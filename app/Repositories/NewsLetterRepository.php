<?php
namespace App\Repositories;

use App\Interfaces\NewsLetterInterface;
use App\Models\NewsLetter;

class NewsLetterRepository implements NewsLetterInterface{
    public function viewAll()
    {
        // TODO: Implement viewAll() method.
        return NewsLetter::all();
    }

    public function addData($email)
    {
        // TODO: Implement addData() method.
        $newsLetter = new NewsLetter([
            'email'=>$email,
        ]);
        $newsLetter->save();
        return $newsLetter;
    }

    public function editData($id)
    {
        // TODO: Implement editData() method.
    }

    public function updateData($id, $email)
    {
        // TODO: Implement updateData() method.
    }

    public function deleteItem($id)
    {
        // TODO: Implement deleteItem() method.
    }
}
