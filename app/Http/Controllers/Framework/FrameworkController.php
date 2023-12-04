<?php

namespace App\Http\Controllers\Framework;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\FrameWork;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class FrameworkController extends Controller
{
    public function viewAll()
    {
        $frameworks =FrameWork::all();
        return view("admin.framework.view", ["frameworks" => $frameworks]);
    }

    public function addFramework(Request $request)
    {
        return view("admin.framework.add");
    }

    public function addFrameworkSave(Request $request)
    {
        if ($video = $request->file('video')) {

            $helper = new Helper();
            $video = $helper->storeVideo($video, "framework");
        }
        if ($file = $request->file('file')) {

            $helper = new Helper();
            $file = $helper->storeFile($file, "framework");
        }
        $tabs = new FrameWork([
            "title" => $request->get("title"),
            "video" => $video,
            "file" => $file,
        ]);

        $tabs->save();
        return redirect()->route("view_all_frameworks")->with("success", "Framework saved successfully");
    }

    public function editFramework(Request $request, $id)
    {

        try {
            $framework = FrameWork::where(["id" => $id])->first();
            return view("admin.framework.edit", ["framework" => $framework]);

        } catch (Exception $exception) {
            return redirect()->route("view_all_frameworks")->with("error", "Something went wrong");
        }
    }

    public function editFrameworkUpdate(Request $request, $id)
    {
        try {
            if ($video = $request->file('video')) {
                $helper = new Helper();
                $video = $helper->storeVideo($video, "framework");
            }
            if ($file = $request->file('file')) {

                $helper = new Helper();
                $video = $helper->storeFile($file, "framework");
            }
            $framework = FrameWork::where(["id" => $id])->first();
            $framework->title = $request->get("title");

            if($video!=null){
                $framework->video = $video;
            }
            if($file!=null){
                $framework->file = $file;
            }
            $framework->save();
            return redirect()->route("view_all_frameworks")->with("success", "framework updated successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_frameworks")->with("error", "Something went wrong");

        }
    }

    public function deleteFramework(Request $request, $id)
    {
        try {
            FrameWork::where(["id" => $id])->delete();
            return redirect()->route("view_all_frameworks")->with("success", "framework deleted successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_frameworks")->with("error", "Something went wrong");
        }
    }
}
