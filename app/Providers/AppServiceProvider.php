<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SuccessStoriesRepository;
use App\Repositories\CourseCategoryRepository;
use App\Repositories\GalleryCategoryRepository;
use App\Repositories\EventsRepository;
use App\Repositories\SliderRepository;
use App\Repositories\CourseRepository;
use App\Repositories\GalleryRepository;
use App\Repositories\SettingsRepository;
use App\Repositories\RepositoryCategoryRepository;
use App\Repositories\AdminFilesRepository;
use App\Repositories\AffiliatesRepository;
use App\Repositories\EntrepreneuerRegistrationRepository;
use App\Repositories\ChamberRegestrationRepository;
use App\Repositories\NewsLetterRepository;
use App\Repositories\HtmlEditorRepository;





use App\Interfaces\SuccessStoriesInterface;
use App\Interfaces\CourseCategoryInterface;
use App\Interfaces\GalleryCategoryInterface;
use App\Interfaces\EventsInterface;
use App\Interfaces\SliderInterface;
use App\Interfaces\CourseInterface;
use App\Interfaces\GalleryInterface;
use App\Interfaces\SettingsInterface;
use App\Interfaces\RepositoryCategoryInterface;
use App\Interfaces\AdminFilesInterface;
use App\Interfaces\AffiliatesInterface;
use App\Interfaces\EntrepreneuerRegistrationInterface;
use App\Interfaces\ChamberRegistrationInterface;
use App\Interfaces\NewsLetterInterface;
use App\Interfaces\HtmlEditorInterface;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SuccessStoriesInterface::class, SuccessStoriesRepository::class);
        $this->app->bind(CourseCategoryInterface::class, CourseCategoryRepository::class);
        $this->app->bind(GalleryCategoryInterface::class, GalleryCategoryRepository::class);
        $this->app->bind(EventsInterface::class, EventsRepository::class);
        $this->app->bind(SliderInterface::class, SliderRepository::class);
        $this->app->bind(CourseInterface::class, CourseRepository::class);
        $this->app->bind(GalleryInterface::class, GalleryRepository::class);
        $this->app->bind(SettingsInterface::class, SettingsRepository::class);
        $this->app->bind(RepositoryCategoryInterface::class, RepositoryCategoryRepository::class);
        $this->app->bind(AdminFilesInterface::class, AdminFilesRepository::class);
        $this->app->bind(AffiliatesInterface::class, AffiliatesRepository::class);
        $this->app->bind(EntrepreneuerRegistrationInterface::class, EntrepreneuerRegistrationRepository::class);
        $this->app->bind(ChamberRegistrationInterface::class, ChamberRegestrationRepository::class);
        $this->app->bind(NewsLetterInterface::class, NewsLetterRepository::class);
        $this->app->bind(HtmlEditorInterface::class, HtmlEditorRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
