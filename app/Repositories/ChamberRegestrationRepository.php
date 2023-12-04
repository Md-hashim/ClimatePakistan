<?php
namespace App\Repositories;

use App\Interfaces\ChamberRegistrationInterface;
use App\Models\ChamberRegistration;

class ChamberRegestrationRepository implements ChamberRegistrationInterface{
    public function viewAll()
    {
        // TODO: Implement viewAll() method.
        return ChamberRegistration::all();
    }

    public function addData($chamberName, $email, $registrationNumber, $businessAddress)
    {
        // TODO: Implement addData() method.
        $chamber = new ChamberRegistration([
            'chamber_name'=>$chamberName,
            'email'=>$email,
            'registration_number'=>$registrationNumber,
            'business_address'=>$businessAddress,
        ]);
        $chamber->save();
        return $chamber;
    }

    public function editData($id)
    {
        // TODO: Implement editData() method.
        return ChamberRegistration::where(['id'=>$id])->get();
    }

    public function updateData($id, $chamberName, $email, $registrationNumber, $businessAddress)
    {
        // TODO: Implement updateData() method.

    }

    public function deleteItem($id)
    {
        // TODO: Implement deleteItem() method.
    }
}
