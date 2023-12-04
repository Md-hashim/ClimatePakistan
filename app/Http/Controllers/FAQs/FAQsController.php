<?php

namespace App\Http\Controllers\FAQs;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPUnit\Exception;

class FAQsController extends Controller
{
    public function viewAllFAQs(Request $request)
    {
        $faqs = Faqs::all();
        return view("admin.faqs.view_faqs", ["faqs" => $faqs]);
    }

    public function addFaqs(Request $request)
    {
        return view("admin.faqs.add_faqs");
    }

    public function addFaqsSave(Request $request)
    {
        $faqs = new Faqs([
            "question" => $request->get("question"),
            "answer" => $request->get("answer"),
        ]);

        $faqs->save();
        return redirect()->route("view_all_faqs")->with("success", "faqs saved successfully");
    }

    public function editFaqs(Request $request, $id)
    {

        try {
            $faqs = Faqs::where(["id" => $id])->first();
            return view("admin.faqs.edit_faqs", ["faqs" => $faqs]);

        } catch (Exception $exception) {
            return redirect()->route("view_all_faqs")->with("error", "Something went wrong");
        }
    }

    public function editFaqsUpdate(Request $request, $id)
    {
        try {
            $faqs = Faqs::where(["id" => $id])->first();
            $faqs->title = $request->get("question");
            $faqs->status = $request->get("answer");
            $faqs->save();
            return redirect()->route("view_all_faqs")->with("success", "faqs updated successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_faqs")->with("error", "Something went wrong");

        }
    }

    public function deleteFaqs(Request $request, $id)
    {
        try {
            Faqs::where(["id" => $id])->delete();
            return redirect()->route("view_all_faqs")->with("success", "faqs deleted successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_faqs")->with("error", "Something went wrong");
        }
    }
}
