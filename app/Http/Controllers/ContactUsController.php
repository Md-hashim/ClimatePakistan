<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Exception;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function viewContactPageSettings(Request $request)
    {
        $contact = ContactUs::first();
        return view("admin.contact.contact_settings", ["contact" => $contact]);
    }

    public function updateContactPageSettings(Request $request)
    {
        try {
            $contact = ContactUs::first();
            $contact->update([
                "content" => $request->get("content"),
            ]);

            $contact->save();

            return redirect()->route("contact_settings")->with("success", "Page content updated successfully");
        }
        catch (Exception $exception){

            return redirect()->route("contact_settings")->with("error", "Something went wrong");
        }

    }
}
