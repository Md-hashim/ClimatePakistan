<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Offices;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;

class OfficesController extends Controller
{
    //

    public function viewAllOffices()
    {
        $offices =Offices::all();
        return view("admin.offices.view",["offices"=>$offices]);
    }

    public function addOffice(Request $request)
    {
        try {
            $city=$request->get('city');
            $location=$request->get('location');
            $detail=$request->get('detail');
            $email=$request->get('email');
            $contact_number=$request->get('contact_number');
            if($image = $request->file('image'))
            {
                $helper = new Helper();
                $image=$helper->storeImage($image,"Offices");
            }

            $office = new Offices([
                "city" => $city,
                "location" => $location,
                "detail" => $detail,
                "email" => $email,
                "contact_number" => $contact_number,
                "image" => $image,
            ]);
            $office->save();
            return redirect()->route("view_all_offices")->with("success", "Office added successfully!");

        }catch (\Exception $exception){
            return redirect()->route("view_all_offices")->with("error", "Something went wrong! Contact support");
        }
    }

    public function updateOffice (Request $request)
    {
        try {
            $id = $request->get('id');
            $city=$request->get('city');
            $location=$request->get('location');
            $detail=$request->get('detail');
            $email=$request->get('email');
            $contact_number=$request->get('contact_number');
            if($image = $request->file('image'))
            {
                $helper = new Helper();
                $image=$helper->storeImage($image,"Offices");
            }

            $office = Offices::where(['id'=>$id])->first();
            $office->city=$city;
            $office->location=$location;
            $office->detail=$detail;
            $office->email=$email;
            $office->contact_number=$contact_number;
            if($image!=null){
                $office->image = $image;
            }
            $office->save();


            return redirect()->route("view_all_offices")->with("success", "Office detail updated successfully!");
        }catch (Exception $exception)
        {
            return redirect()->route("view_all_offices")->with("error", "Something went wrong! Contact support");
        }
    }

    public function  deleteOffice($id)
    {
        try {

            Offices::where(['id'=>$id])->delete();

            return redirect()->route("view_all_offices")->with("success", "Office detail deleted successfully!");
        }catch (Exception $exception)
        {
            return redirect()->route("view_all_offices")->with("error", "Something went wrong! Contact support");
        }
    }



}
