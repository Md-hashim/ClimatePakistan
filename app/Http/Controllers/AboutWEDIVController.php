<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\AboutTDAP;
use App\Models\AboutWEDIV;
use Illuminate\Http\Request;

class  AboutWEDIVController extends Controller
{
    public function viewWEDIVSettings(Request $request)
    {
        $weDiv = AboutWEDIV::first();
        return view("admin.we_div.wediv_settings", ["weDiv" => $weDiv]);
    }

    public function updateWEDIVSettings(Request $request)
    {

        $helper = new Helper();
        $banner_image = null;
        $section_1_image = null;
        $section_2_image = null;
        if ($imageFile = $request->file('banner_image')) {
            $banner_image = $helper->storeImage($imageFile, 'wediv');
        }
        if ($imageFile = $request->file('section_1_image')) {
            $section_1_image = $helper->storeImage($imageFile, 'wediv');
        }
        if ($imageFile = $request->file('section_2_image')) {
            $section_2_image = $helper->storeImage($imageFile, 'wediv');
        }
        $weDiv = AboutWEDIV::first();
        $weDiv->update([
            "page_title" => $request->get("page_title"),
            "meta_title" => $request->get("meta_title"),
            "meta_description" => $request->get("meta_description"),

            "section_1_title" => $request->get("section_1_title"),
            "section_1_content" => $request->get("section_1_content"),

            "section_2_title" => $request->get("section_2_title"),
            "section_2_content" => $request->get("section_2_content"),

        ]);

        if ($banner_image != null) {
            $weDiv->banner_image = $banner_image;
        }
        if ($section_2_image != null) {
            $weDiv->section_2_image = $section_2_image;
        }
        if ($section_1_image != null) {
            $weDiv->section_1_image = $section_1_image;
        }

        $weDiv->save();

        return redirect()->route("wediv_settings")->with("success", "Page content updated successfully");
    }
}
