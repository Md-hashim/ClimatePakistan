<?php

namespace App\Http\Controllers;

use App\Interfaces\ChamberRegistrationInterface;
use App\Models\ChamberRegistration;
use App\Models\EntreprnureRegistration;
use App\Repositories\ChamberRegestrationRepository;
use Illuminate\Http\Request;
use Exception;

class ChamberRegistrationController extends Controller
{

    private ChamberRegestrationRepository $chamberRegestrationRepository;

    private ChamberRegistrationInterface $chamberRegistrationInterface;

    /**
     * @param ChamberRegestrationRepository $chamberRegestrationRepository
     * @param ChamberRegistrationInterface $chamberRegistrationInterface
     */
    public function __construct(ChamberRegestrationRepository $chamberRegestrationRepository, ChamberRegistrationInterface $chamberRegistrationInterface)
    {
        $this->chamberRegestrationRepository = $chamberRegestrationRepository;
        $this->chamberRegistrationInterface = $chamberRegistrationInterface;
    }

    public function viewChamber()
    {
        $chambers=$this->chamberRegestrationRepository->viewAll();
        return view ("admin.registrations.chamber",["chambers"=>$chambers]);
    }


    public function chamberRegistration(Request $request){

        try {
            $register = new ChamberRegistration([
                "chamber_name"=>$request->get("chamber_name"),
                "email"=>$request->get("email"),
                "registration_number"=>$request->get("registration_number"),
                "business_address"=>$request->get("business_address"),
                "type"=>"External"
            ]);

            $register->save();
            return redirect()->back()->with('success', 'Form submitted successfully');

        }
        catch (Exception $exception){
            return redirect()->back()->with('error', 'Something went wrong. Please try again!');
        }

    }


    public function chamberRegistrationInternal(Request $request){

        try {
            $register = new ChamberRegistration([
                "chamber_name"=>$request->get("chamber_name"),
                "email"=>$request->get("email"),
                "registration_number"=>$request->get("registration_number"),
                "business_address"=>$request->get("business_address"),
                "type"=>"Internal"
            ]);

            $register->save();
            return redirect()->back()->with('success', 'Form submitted successfully');

        }
        catch (Exception $exception){
            return redirect()->back()->with('error', 'Something went wrong. Please try again!');
        }

    }

    public function updateChamberRegistration(Request $request){

        try {
            $register =  ChamberRegistration::where(["id"=>$request->get("id")])->update([
                "chamber_name"=>$request->get("chamber_name"),
                "email"=>$request->get("email"),
                "registration_number"=>$request->get("registration_number"),
                "business_address"=>$request->get("business_address"),
                "type"=>$request->get("type"),
            ]);

            return redirect()->back()->with('success', 'Chamber updated successfully');

        }
        catch (Exception $exception){
            return redirect()->back()->with('error', 'Something went wrong. Please try again!');
        }

    }


    public function destroyChamber($id)
    {
        try
        {
            ChamberRegistration::where(["id"=>$id])->delete();
            return redirect()->route("view_chamber_registrations")->with('success',"Data Deleted Successfully");
        }catch (Exception $exception)
        {
            return redirect()->route("view_chamber_registrations")->with('error',"Something Went Wrong");
        }
    }
}
