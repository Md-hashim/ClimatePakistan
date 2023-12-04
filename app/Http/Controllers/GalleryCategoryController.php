<?php

namespace App\Http\Controllers;

use App\Interfaces\GalleryCategoryInterface;
use App\Repositories\GalleryCategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class GalleryCategoryController extends Controller
{
    //

    private GalleryCategoryRepository $galleryCategoryRepository;
    private GalleryCategoryInterface $galleryCategoryInterface;

    /**
     * @param GalleryCategoryRepository $galleryCategoryRepository
     * @param GalleryCategoryInterface $galleryCategoryInterface
     */
    public function __construct(GalleryCategoryRepository $galleryCategoryRepository, GalleryCategoryInterface $galleryCategoryInterface)
    {
        $this->galleryCategoryRepository = $galleryCategoryRepository;
        $this->galleryCategoryInterface = $galleryCategoryInterface;
    }
    public function viewGalleryCategory(Request $request)
    {
        $gallery_category = $this->galleryCategoryRepository->getGalleryCatagories();
        return view("admin.setup.gallery_category",["gallery_category"=>$gallery_category]);
    }

    public function addGalleryCategory(Request $request)
    {

        try
        {
            $name=$request->get('name');
//            dd($name);
            $this->galleryCategoryRepository->addGalleryCatagory(name:$name);

            return redirect()->route("view_gallery_category")->with("success", "Gallery Category added  successfully!");

        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_gallery_category")->with("error", "Something went wrong! Contact support");
        }
    }

    public function getGalleryCategory($id)
    {
        try
        {
            $gallery_category = $this->galleryCategoryRepository->getGalleryCatagory($id);

            return response()->json(['category'=>$gallery_category],200);
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return response()->json(["category" => null], 404);

        }
    }

    public function updateGalleryCategory(Request $request)
    {
        try
        {
            $id= $request->get('id');
            $name = $request->get('cat_name');
            $this->galleryCategoryRepository->updateGalleryCatagory(id:$id,name:$name);

            return redirect()->route("view_gallery_category")->with("success", "Course Category updated  successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_gallery_category")->with("error", "Something went wrong! Contact support");
        }

    }

    public function deleteGalleryCategory($id)
    {
        try {
            $this->galleryCategoryRepository->deleteGalleryCatagory($id);
            return redirect()->route("view_gallery_category")->with("success", "Gallery Category deleted  successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_gallery_category")->with("error", "This Category is associated with the gallery.Please update or delete gallery");
        }
    }
}
