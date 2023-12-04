<?php

namespace App\Interfaces;

interface EntrepreneuerRegistrationInterface
{
 public function viewAll();
 public function addData($fullName,$email,$cnic,$businessName,$phoneNumber,$education,$otherEducation,$businessType,$productCategories,$trainings,$targetMarket,$language,$otherLanguage,$address);
 public function editData($id);
 public function updateData($id,$fullName,$email,$cnic,$businessName,$phoneNumber,$education,$otherEducation,$businessType,$productCategories,$trainings,$targetMarket,$language,$otherLanguage,$address);
 public function deleteItem($id);

}
