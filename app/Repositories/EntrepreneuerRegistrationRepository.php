<?php
namespace App\Repositories;

use App\Interfaces\EntrepreneuerRegistrationInterface;
use App\Models\EntreprnureRegistration;

class EntrepreneuerRegistrationRepository implements EntrepreneuerRegistrationInterface
{
    public function viewAll()
    {
        // TODO: Implement viewAll() method.
        return EntreprnureRegistration::all();

    }

    public function addData($fullName, $email, $cnic, $businessName, $phoneNumber, $education, $otherEducation,
                            $businessType, $productCategories, $trainings,
                            $targetMarket, $language, $otherLanguage, $address)
    {
        // TODO: Implement addData() method.
        $registration = new EntreprnureRegistration([
           'full_name'=>$fullName,
           'email'=>$email,
           'cnic'=>$cnic,
           'business_name'=>$businessName,
           'phone_number'=>$phoneNumber,
           'education'=>$education,
           'other_education'=>$otherEducation,
            'business_type'=>$businessType,
            'product_categories'=>$productCategories,
            'trainings'=>$trainings,
            'target_market'=>$targetMarket,
            'language'=>$language,
            'other_language'=>$otherLanguage,
            'address'=>$address,
        ]);
        $registration->save();
        return $registration;
    }

    public function editData($id)
    {
        // TODO: Implement editData() method.
    }

    public function updateData($id, $fullName, $email, $cnic, $businessName, $phoneNumber, $education, $otherEducation, $businessType, $productCategories, $trainings, $targetMarket, $language, $otherLanguage, $address)
    {
        // TODO: Implement updateData() method.
    }

    public function deleteItem($id)
    {
        return EntreprnureRegistration::where(["id"=>$id])->delete();
    }
}
