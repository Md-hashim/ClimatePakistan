<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\GalleryCategoryInterface;
use App\Interfaces\GalleryInterface;
use App\Repositories\GalleryCategoryRepository;
use App\Repositories\GalleryRepository;
use App\Repositories\SuccessStoriesRepository;
use App\Interfaces\SuccessStoriesInterface;
use App\Interfaces\EventsInterface;
use App\Repositories\EventsRepository;
class HomeController extends Controller
{

    private GalleryRepository $galleryRepository;
    private GalleryInterface $galleryInterface;
    private GalleryCategoryRepository $galleryCategoryRepository;
    private GalleryCategoryInterface $galleryCategoryInterface;
    private SuccessStoriesRepository $successStoriesRepository;
    private SuccessStoriesInterface $successStoriesInterface;


    /**
     * @param GalleryRepository $galleryRepository
     * @param GalleryInterface $galleryInterface
     * @param GalleryCategoryRepository $galleryCategoryRepository
     * @param GalleryCategoryInterface $galleryCategoryInterface
     * @param SuccessStoriesRepository $successStoriesRepository
     * @param SuccessStoriesInterface $successStoriesInterface
     * @param EventsRepository $eventsRepository
     * @param EventsInterface $eventsInterface
     */
    public function __construct(GalleryRepository $galleryRepository, GalleryInterface $galleryInterface, GalleryCategoryRepository $galleryCategoryRepository, GalleryCategoryInterface $galleryCategoryInterface,SuccessStoriesRepository $successStoriesRepository, SuccessStoriesInterface $successStoriesInterface,EventsRepository $eventsRepository, EventsInterface $eventsInterface)
    {
        $this->galleryRepository = $galleryRepository;
        $this->galleryInterface = $galleryInterface;
        $this->galleryCategoryRepository = $galleryCategoryRepository;
        $this->galleryCategoryInterface = $galleryCategoryInterface;
        $this->successStoriesRepository = $successStoriesRepository;
        $this->successStoriesInterface = $successStoriesInterface;
        $this->eventsRepository = $eventsRepository;
        $this->eventsInterface = $eventsInterface;
    }
    public function viewHomePage()
    {
        $gallery_data = $this->galleryRepository->getGalleryData();
        $gallery_categories = $this->galleryCategoryRepository->getGalleryCatagories();
        $success_stories = $this->successStoriesRepository->getSuccessStories();
        $events = $this->eventsRepository->getEvents();
        return view('website.home_V1',['gallery_data'=>$gallery_data,'gallery_categories'=>$gallery_categories,"success_stories"=>$success_stories,'events'=>$events]);
    }

    public function viewAboutTDAP()
    {
        return view('website.pages.about_tdap');
    }
    public function viewAboutWEDP()
    {
        return view('website.pages.about_wedp');
    }
    public function viewStartBusiness()
    {
        return view('website.pages.business');
    }
    public function viewFinancingFunding()
    {
        return view('website.pages.finance');
    }
    public function viewRegistrationChamber()
    {
        return view('website.pages.registrations');
    }
    public function viewContactUs()
    {
        return view('website.pages.contact');
    }
}
