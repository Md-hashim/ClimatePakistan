<?php

namespace App\Http\Controllers\News;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPUnit\Exception;

class NewsController extends Controller
{
    public function viewAllNews(Request $request)
    {
        $news = News::all();
        return view("admin.news.view_news", ["news" => $news]);
    }

    public function addNews(Request $request)
    {
        return view("admin.news.add_news");
    }

    public function addNewsSave(Request $request)
    {
        if ($banner_image = $request->file('banner_image')) {

            $helper = new Helper();
            $banner_image = $helper->storeImage($banner_image, "news");
        }
        $news = new News([
            "title" => $request->get("title"),
            "slug" => Str::slug($request->get("title"), '-'),
            "banner_image" => $banner_image,
            "status" => $request->get("status"),
            "content" => $request->get("content"),
        ]);

        $news->save();
        return redirect()->route("view_all_news")->with("success", "News saved successfully");
    }

    public function editNews(Request $request, $id)
    {

        try {
            $news = News::where(["id" => $id])->first();
            return view("admin.news.edit_news", ["news" => $news]);

        } catch (Exception $exception) {
            return redirect()->route("view_all_news")->with("error", "Something went wrong");
        }
    }

    public function editNewsUpdate(Request $request, $id)
    {
        try {
            if ($banner_image = $request->file('banner_image')) {

                $helper = new Helper();
                $banner_image = $helper->storeImage($banner_image, "news");
            }
            $news = News::where(["id" => $id])->first();
            $news->title = $request->get("title");
            $news->slug = Str::slug($request->get("title"), '-');
            if($banner_image!=null){
                $news->banner_image = $banner_image;
            }
            $news->content = $request->get("content");
            $news->status = $request->get("status");
            $news->save();
            return redirect()->route("view_all_news")->with("success", "News updated successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_news")->with("error", "Something went wrong");

        }
    }

    public function deleteNews(Request $request, $id)
    {
        try {
            News::where(["id" => $id])->delete();
            return redirect()->route("view_all_news")->with("success", "News deleted successfully");
        } catch (Exception $exception) {
            return redirect()->route("view_all_news")->with("error", "Something went wrong");
        }
    }
}
