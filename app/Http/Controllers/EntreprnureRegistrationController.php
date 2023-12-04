<?php

namespace App\Http\Controllers;

use App\Interfaces\EntrepreneuerRegistrationInterface;
use App\Models\EntreprnureRegistration;
use App\Repositories\EntrepreneuerRegistrationRepository;
use Illuminate\Http\Request;
use Exception;

class EntreprnureRegistrationController extends Controller
{
    private EntrepreneuerRegistrationRepository $entrepreneuerRegistrationRepository;
    private EntrepreneuerRegistrationInterface $entrepreneuerRegistrationInterface;

    /**
     * @param EntrepreneuerRegistrationRepository $entrepreneuerRegistrationRepository
     * @param EntrepreneuerRegistrationInterface $entrepreneuerRegistrationInterface
     */
    public function __construct(EntrepreneuerRegistrationRepository $entrepreneuerRegistrationRepository, EntrepreneuerRegistrationInterface $entrepreneuerRegistrationInterface)
    {
        $this->entrepreneuerRegistrationRepository = $entrepreneuerRegistrationRepository;
        $this->entrepreneuerRegistrationInterface = $entrepreneuerRegistrationInterface;
    }

    public function entrepreneurshipRegistration(Request $request){

        try {
            $register = new EntreprnureRegistration([
                "full_name"=>$request->get("full_name"),
                "email"=>$request->get("email"),
                "cnic"=>$request->get("cnic"),
                "business_name"=>$request->get("business_name"),
                "phone_number"=>$request->get("phone_number"),
                "education"=>$request->get("education"),
                "other_education"=>$request->get("other_education"),
                "business_type"=>implode(', ',$request->get("business_type")),
                "product_categories"=>implode(', ',$request->get("product_categories")),
                "trainings"=>$request->get("trainings"),
                "target_market"=>$request->get("target_market"),
                "language"=>$request->get("language"),
                "other_language"=>$request->get("other_language"),
                "address"=>$request->get("address"),

                "social_media"=>$request->get("social_media"),
                "region"=>$request->get("region"),
                "exporter"=>$request->get("exporter"),
                "export_destination"=>$request->get("export_destination"),
            ]);

            $register->save();
            return redirect()->back()->with('success', 'Form submitted successfully');

        }
        catch (Exception $exception){
            return redirect()->back()->with('error', 'Something went wrong. Please try again!');
        }

    }

    public function viewRegistrations()
    {
        $registrations = $this->entrepreneuerRegistrationRepository->viewAll();
        return view("admin.registrations.entrepreneurs", ["registrations" => $registrations]);
    }

    public function deleteRegistrations($id)
    {
        try {
            $this->entrepreneuerRegistrationRepository->deleteItem($id);
            return redirect()->route("view_entrepreneurs_registrations")->with("success","Data Deleted Successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_entrepreneurs_registrations")->with("error","Something Went Wrong");
        }
    }
}
