<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\AboutTDAP;
use Illuminate\Http\Request;

class AboutTDAPController extends Controller
{
    public function viewAboutPageSettings(Request $request)
    {
        $about = AboutTDAP::first();
        return view("admin.about.about_settings", ["about" => $about]);
    }

    public function updateAboutPageSettings(Request $request)
    {

        $helper = new Helper();
        $banner_image = null;
        $section_1_image = null;
        $section_2_image = null;
        $section_3_image = null;
        $section_4_image = null;
        if ($imageFile = $request->file('banner_image')) {
            $banner_image = $helper->storeImage($imageFile, 'about-page');
        }
        if ($imageFile = $request->file('section_1_image')) {
            $section_1_image = $helper->storeImage($imageFile, 'about-page');
        }
        if ($imageFile = $request->file('section_2_image')) {
            $section_2_image = $helper->storeImage($imageFile, 'about-page');
        }
        if ($imageFile = $request->file('section_3_image')) {
            $section_3_image = $helper->storeImage($imageFile, 'about-page');
        }
        if ($imageFile = $request->file('section_4_image')) {
            $section_4_image = $helper->storeImage($imageFile, 'about-page');
        }
        $about = AboutTDAP::first();
        $about->update([
            "page_title" => $request->get("page_title"),
            "meta_title" => $request->get("meta_title"),
            "meta_description" => $request->get("meta_description"),

            "section_1_title" => $request->get("section_1_title"),
            "section_1_content" => $request->get("section_1_content"),

            "section_2_title" => $request->get("section_2_title"),
            "section_2_content" => $request->get("section_2_content"),

            "section_3_title" => $request->get("section_3_title"),
            "section_3_content" => $request->get("section_3_content"),

            "section_4_title" => $request->get("section_4_title"),
            "section_4_content" => $request->get("section_4_content"),
        ]);

        if ($banner_image != null) {
            $about->banner_image = $banner_image;
        }
        if ($section_2_image != null) {
            $about->section_2_image = $section_2_image;
        }
        if ($section_1_image != null) {
            $about->section_1_image = $section_1_image;
        }
        if ($section_3_image != null) {
            $about->section_3_image = $section_3_image;
        }
        if ($section_4_image != null) {
            $about->section_4_image = $section_4_image;
        }
        $about->save();

        return redirect()->route("about_settings")->with("success", "Page content updated successfully");
    }
}
