<?php

namespace App\Http\Controllers\Community;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPUnit\Exception;

class CommunityController extends Controller
{
    public function viewAllTabs(Request $request)
    {
        $tabs = Community::all();
        return view("admin.community.view_tabs", ["tabs" => $tabs]);
    }

    public function addTabs(Request $request)
    {
        return view("admin.community.add_tab");
    }

    public function addtabSave(Request $request)
    {
        if ($video = $request->file('video')) {

            $helper = new Helper();
            $video = $helper->storeVideo($video, "community");
        }
        $tabs = new Community([
            "tab_name" => $request->get("tab_name"),
            "video" => $video,
            "content" => $request->get("content"),
        ]);

        $tabs->save();
        return redirect()->route("view_all_community_tabs")->with("success", "tabs saved successfully");
    }

    public function editTab(Request $request, $id)
    {

        try {
            $tab = Community::where(["id" => $id])->first();
            return view("admin.community.edit_tab", ["tab" => $tab]);

        } catch (Exception $exception) {
            return redirect()->route("view_all_community_tabs")->with("error", "Something went wrong");
        }
    }

    public function editTabUpdate(Request $request, $id)
    {
        try {
            if ($video = $request->file('video')) {
                $helper = new Helper();
                $video = $helper->storeVideo($video, "community");
            }
            $tab = Community::where(["id" => $id])->first();
            $tab->tab_name = $request->get("tab_name");
            $tab->content = $request->get("content");
            if($video!=null){
                $tab->video = $video;
            }
            $tab->save();
            return redirect()->route("view_all_community_tabs")->with("success", "tab updated successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_community_tabs")->with("error", "Something went wrong");

        }
    }

    public function deleteTab(Request $request, $id)
    {
        try {
            Community::where(["id" => $id])->delete();
            return redirect()->route("view_all_community_tabs")->with("success", "tab deleted successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_community_tabs")->with("error", "Something went wrong");
        }
    }
}
