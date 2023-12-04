<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Interfaces\SliderInterface;
use App\Repositories\SliderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class SliderController extends Controller
{
    private SliderRepository $sliderRepository;
    private SliderInterface $sliderInterface;

    /**
     * @param SliderRepository $sliderRepository
     * @param SliderInterface $sliderInterface
     */
    public function __construct(SliderRepository $sliderRepository, SliderInterface $sliderInterface)
    {
        $this->sliderRepository = $sliderRepository;
        $this->sliderInterface = $sliderInterface;
    }

    public function viewSlider(Request $request)
    {
        $sliders = $this->sliderRepository->getSliderData();
        return view("admin.slider.view_slider",['sliders'=>$sliders]);
    }
    public function addSlider(Request $request)
    {
        return view("admin.slider.add_slider");
    }

    public function submitSliderData(Request $request)
    {
        try
        {
            $image = $request->get('image');
            $title = $request->get('title');
            $description=$request->get('description');
            $category=$request->get('category');
            if($image=$request->file('image'))
            {
                $helper= new Helper();
                $image= $helper->storeImage($image,'Slider');
            }
            $this->sliderRepository->addSliderData(image: $image,title: $title,description: $description,category: $category);
            return redirect()->route("view_admin_slider")->with("success", "Slider data added successfully!");
        }
        catch (Exception $exception)
        {

            Log::error($exception);
            return redirect()->route("view_admin_slider")->with("error", "Something went wrong! Contact support");
        }
    }

    public function editSliderDate($id)
    {
        $slider=$this->sliderRepository->getSliderById($id);
        return view("admin.slider.edit_slider",['slider'=>$slider]);
    }

    public function updateSliderData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $image = $request->get('image');
            $title = $request->get('title');
            $description=$request->get('description');
            $category=$request->get('category');
            if($image=$request->file('image'))
            {
                $helper= new Helper();
                $image= $helper->storeImage($image,'Slider');
            }
            $this->sliderRepository->updateSliderData(id: $id, title: $title, description: $description, category: $category, image: $image);
            return redirect()->route("view_admin_slider")->with("success", "Slider data updated successfully!");
        }
        catch (Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_admin_slider")->with("error", "Something went wrong! Contact support");
        }
    }

    public function destroySliderData($id)
    {
        try
        {
            $this->sliderRepository->deleteSliderData($id);
            return redirect()->route("view_admin_slider")->with("success", "Slider data deleted successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_admin_slider")->with("error", "Something went wrong! Contact support");
        }
    }
}
