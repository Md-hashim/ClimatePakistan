<?php

namespace App\Http\Controllers\Academy;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\WEAcademy;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class AcademyController extends Controller
{
    public function viewAllTabs(Request $request)
    {
        $tabs = WEAcademy::all();
        return view("admin.academy.view_tabs", ["tabs" => $tabs]);
    }

    public function addTabs(Request $request)
    {
        return view("admin.academy.add_tab");
    }

    public function addtabSave(Request $request)
    {
        $tabs = new WEAcademy([
            "tab_name" => $request->get("tab_name"),
            "page" => $request->get("page"),
            "content" => $request->get("content"),
        ]);

        $tabs->save();
        return redirect()->route("view_all_academy_tabs")->with("success", "tabs saved successfully");
    }

    public function editTab(Request $request, $id)
    {

        try {
            $tab = WEAcademy::where(["id" => $id])->first();
            return view("admin.academy.edit_tab", ["tab" => $tab]);

        } catch (Exception $exception) {
            return redirect()->route("view_all_academy_tabs")->with("error", "Something went wrong");
        }
    }

    public function editTabUpdate(Request $request, $id)
    {
        try {
            $tab = WEAcademy::where(["id" => $id])->first();
            $tab->tab_name = $request->get("tab_name");
            $tab->content = $request->get("content");
            $tab->page = $request->get("page");
            $tab->save();
            return redirect()->route("view_all_academy_tabs")->with("success", "tab updated successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_academy_tabs")->with("error", "Something went wrong");

        }
    }

    public function deleteTab(Request $request, $id)
    {
        try {
            WEAcademy::where(["id" => $id])->delete();
            return redirect()->route("view_all_academy_tabs")->with("success", "tab deleted successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_academy_tabs")->with("error", "Something went wrong");
        }
    }
}
