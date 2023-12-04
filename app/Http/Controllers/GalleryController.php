<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Interfaces\GalleryCategoryInterface;
use App\Interfaces\GalleryInterface;
use App\Repositories\GalleryCategoryRepository;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class GalleryController extends Controller
{

    private GalleryRepository $galleryRepository;
    private GalleryInterface $galleryInterface;
    private GalleryCategoryRepository $galleryCategoryRepository;
    private GalleryCategoryInterface $galleryCategoryInterface;

    /**
     * @param GalleryRepository $galleryRepository
     * @param GalleryInterface $galleryInterface
     * @param GalleryCategoryRepository $galleryCategoryRepository
     * @param GalleryCategoryInterface $galleryCategoryInterface
     */
    public function __construct(GalleryRepository $galleryRepository, GalleryInterface $galleryInterface, GalleryCategoryRepository $galleryCategoryRepository, GalleryCategoryInterface $galleryCategoryInterface)
    {
        $this->galleryRepository = $galleryRepository;
        $this->galleryInterface = $galleryInterface;
        $this->galleryCategoryRepository = $galleryCategoryRepository;
        $this->galleryCategoryInterface = $galleryCategoryInterface;
    }

    public function viewGallery(Request $request)
    {
        $gallery_data = $this->galleryRepository->getGalleryData();
        return view("admin.gallery.view_gallery", ['gallery_data' => $gallery_data]);
    }

    public function addGallery(Request $request)
    {
        $gallery_categories = $this->galleryCategoryRepository->getGalleryCatagories();
        return view("admin.gallery.add_gallery", ['gallery_categories' => $gallery_categories]);
    }

    public function submitGalleryData(Request $request)
    {
//        try
//        {
        $title = $request->get('title');
        $description = $request->get('description');

        $cat_id = $request->get('cat_id');
        $type = $request->get('gallery_type');
        $image = [];
        $helper = new Helper();
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $imagesFile) {

                $image[] = $helper->storeImage($imagesFile, 'Gallery');

            }

        }
        $video = null;
        if ($videoFile = $request->file('video')) {
            $video = $helper->storeVideo($videoFile, 'Gallery');
        }

        if(!empty($image))
        {
            foreach ($image as $img)
            {
                $this->galleryRepository->addGalleryData(title: $title, description: $description, image: $img, video: $video, type: $type, cat_id: $cat_id);
            }
        }


        return redirect()->route("view_admin_gallery")->with("success", "Gallery data added successfully!");
//    }
//        catch (Exception $exception)
//        {
//            dd($exception);
//            Log::error($exception);
//            return redirect()->route("view_admin_gallery")->with("error", "Something went wrong! Contact support");
//        }

    }

    public function editGalleryData($id)
    {
        $gallery=$this->galleryRepository->getGalleryById($id);
        $categories=$this->galleryCategoryRepository->getGalleryCatagories();
        return view("admin.gallery.edit_gallery",['gallery'=>$gallery,'categories'=>$categories]);
    }

    public function updateGalleryData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $title = $request->get('title');
            $description=$request->get('description');
            $image = $request->get('image');
            $cat_id=$request->get('cat_id');
            $type=$request->get('gallery_type');

            $helper= new Helper();
            if($image=$request->file('image'))
            {

                $image= $helper->storeImage($image,'Gallery');
            }
            $video = null;
            if ($videoFile = $request->file('video')) {
                $video = $helper->storeVideo($videoFile, 'Gallery');
            }
            $this->galleryRepository->updateGalleryData(id: $id, title: $title, description: $description, cat_id: $cat_id, type: $type, image: $image, video: $video);
            return redirect()->route("view_admin_gallery")->with("success", "Slider data updated successfully!");
        }
        catch (Exception $exception)
        {

            Log::error($exception);
            return redirect()->route("view_admin_gallery")->with("error", "Something went wrong! Contact support");
        }
    }

    public function destroyGalleryData($id)
    {
        try
        {
            $this->galleryRepository->deleteGallery($id);
            return redirect()->route("view_admin_gallery")->with("success", "Gallery data deleted successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);

            return redirect()->route("view_admin_gallery")->with("error", "Something went wrong! Contact support");
        }
    }
}
