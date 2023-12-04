<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("test", [\App\Http\Controllers\Web\WebController::class, "test"])->name("test");
Route::get("/", [\App\Http\Controllers\Web\WebController::class, "index"])->name("index");
Route::get("/about-TDAP", [\App\Http\Controllers\Web\WebController::class, "aboutTDAP"])->name("about_tdap");
Route::get("/about-WETDAP", [\App\Http\Controllers\Web\WebController::class, "aboutWETDAP"])->name("about_wetdap");
Route::get("/meet-our-team", [\App\Http\Controllers\Web\WebController::class, "ourTeam"])->name("our_team");
Route::get("/start-your-business", [\App\Http\Controllers\Web\WebController::class, "startYourBusiness"])->name("start_your_business");
Route::get("/financing-and-funding", [\App\Http\Controllers\Web\WebController::class, "financingAndFunding"])->name("financing_and_funding");
Route::get("/legal-and-taxation", [\App\Http\Controllers\Web\WebController::class, "legalAndTaxation"])->name("legal_and_taxation");
Route::get("/registration-with-chamber", [\App\Http\Controllers\Web\WebController::class, "chamberRegistration"])->name("chamber_registration");
Route::post("/registration-with-chamber", [\App\Http\Controllers\ChamberRegistrationController::class, "chamberRegistration"])->name("chamber_registration");
Route::get("/skills", [\App\Http\Controllers\Web\WebController::class, "community"])->name("community");
Route::get("/faqs", [\App\Http\Controllers\Web\WebController::class, "faqs"])->name("faqs");
Route::get("/contact-us", [\App\Http\Controllers\Web\WebController::class, "contactUs"])->name("contact_us");
Route::get("/entrepreneurship-registration", [\App\Http\Controllers\Web\WebController::class, "entrepreneurshipRegistration"])->name("entrepreneurship_registration");
Route::post("/entrepreneurship-registration", [\App\Http\Controllers\EntreprnureRegistrationController::class, "entrepreneurshipRegistration"])->name("entrepreneurship_registration");
Route::get("/events", [\App\Http\Controllers\Web\WebController::class, "allEvents"])->name("all_events");
Route::get("/events/{title}/{id}", [\App\Http\Controllers\Web\WebController::class, "eventDetails"])->name("event_details");
Route::get("/success-stories", [\App\Http\Controllers\Web\WebController::class, "allStories"])->name("all_stories");
Route::get("/story-details/{id}", [\App\Http\Controllers\Web\WebController::class, "storyDetails"])->name("story_details");
Route::get("/mous", [\App\Http\Controllers\Web\WebController::class, "mous"])->name("mous");
Route::get("/collaborations", [\App\Http\Controllers\Web\WebController::class, "collaborations"])->name("collaborations");
Route::get("/annual-business-plan", [\App\Http\Controllers\Web\WebController::class, "annualBusinessPlan"])->name("annual_business_plan");
Route::get("/framework", [\App\Http\Controllers\Web\WebController::class, "framework"])->name("view_framework");
Route::get("/galleries", [\App\Http\Controllers\Web\WebController::class, "galleries"])->name("galleries");

Route::get("/news", [\App\Http\Controllers\Web\WebController::class, "allNews"])->name("all_news");
Route::get("/news/{slug}", [\App\Http\Controllers\Web\WebController::class, "newsDetails"])->name("news_details");
Route::get("/trainings", [\App\Http\Controllers\Web\WebController::class, "allTrainings"])->name("all_trainings");
Route::get("/trainings/{title}/{id}", [\App\Http\Controllers\Web\WebController::class, "trainingDetails"])->name("training_details");
Route::post("/message", [\App\Http\Controllers\Web\WebController::class, "submitMessageForm"])->name("submit_message_form");
Route::get("/offices", [\App\Http\Controllers\Web\WebController::class, "viewAllOffices"])->name("view_offices");

//Route::get("/", [\App\Http\Controllers\HomeController::class, "viewHomePage"])->name("view_home_page");
//Route::get("/about-TDAP", [\App\Http\Controllers\HomeController::class, "viewAboutTDAP"])->name("view_about_tdap");
//Route::get("/about-WEDP", [\App\Http\Controllers\HomeController::class, "viewAboutWEDP"])->name("view_about_wedp");
//Route::get("/start-your-business", [\App\Http\Controllers\HomeController::class, "viewStartBusiness"])->name("view_start_business");
//Route::get("/financing-funding", [\App\Http\Controllers\HomeController::class, "viewFinancingFunding"])->name("view_financing_funding");
//Route::get("/registration-with-chambers", [\App\Http\Controllers\HomeController::class, "viewRegistrationChamber"])->name("view_registration_chambers");
//Route::get("/contact-us", [\App\Http\Controllers\HomeController::class, "viewContactUs"])->name("view_contact_us");

Route::post("/newsletter",[App\Http\Controllers\NewsLetterController::class,"newsletterRegistration"])->name("newsletter_registration");

Route::get("/designer", [\App\Http\Controllers\DesignerController::class, "viewDesigner"])->name("view_designer_page");
Route::get("/designer/{type}", [\App\Http\Controllers\DesignerController::class, "viewDesignerCards"])->name("view_designer_cards");
Route::get("/card-form/{templateName}", [\App\Http\Controllers\DesignerController::class, "viewCardForm"])->name("view_card_form");
Route::get("/brochure-form/{templateName}", [\App\Http\Controllers\DesignerController::class, "viewBrochureForm"])->name("view_brochure_form");
Route::post("/card-preview", [\App\Http\Controllers\DesignerController::class, "submitCardForm"])->name("submit_card_form");
Route::post("/brochure-preview", [\App\Http\Controllers\DesignerController::class, "submitBrochureForm"])->name("submit_brochure_form");

Route::group(['prefix' => 'accounts/'], function () {
    Route::get("/login", [\App\Http\Controllers\LoginController::class, "viewLogin"])->name("login");
    Route::post("/login", [\App\Http\Controllers\LoginController::class, "loginUser"])->name("admin_login");
    Route::get("/logout", [\App\Http\Controllers\LoginController::class, "signOut"])->name("admin_logout");
});


Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'adb/'], function () {

        Route::get("/dashboard", [\App\Http\Controllers\AdminController::class, "viewDashboard"])->name("admin_dashboard");

        Route::get("/settings", [\App\Http\Controllers\AdminController::class, "viewSiteSettings"])->name("view_admin_site_settings");
        Route::get("/add-settings", [\App\Http\Controllers\AdminController::class, "addSiteSettings"])->name("add_admin_site_settings");
        Route::post("/update-settings", [\App\Http\Controllers\AdminController::class, "updateSiteSettings"])->name("update_admin_site_settings");
        Route::get("/account-settings", [\App\Http\Controllers\AdminController::class, "viewAccountSettings"])->name("view_admin_account_settings");
        Route::post("/account-settings", [\App\Http\Controllers\AdminController::class, "accountSettingsSave"])->name("save_admin_account_settings");
        Route::post("/account-password", [\App\Http\Controllers\AdminController::class, "accountUpdatePassword"])->name("save_admin_account_password");
        Route::get("/messages", [\App\Http\Controllers\AdminController::class, "viewMessages"])->name("view_messages");
        Route::get("/message/delete/{id}", [\App\Http\Controllers\AdminController::class, "deleteMessage"])->name("delete_message");


        Route::get("/success-stories", [\App\Http\Controllers\SuccessStoriesController::class, "viewSuccessStories"])->name("view_admin_success_stories");
        Route::get("/add-success-stories", [\App\Http\Controllers\SuccessStoriesController::class, "addSuccessStories"])->name("add_admin_success_stories");
        Route::post("/submit-success-stories", [\App\Http\Controllers\SuccessStoriesController::class, "submitSuccessStories"])->name("submit_admin_success_stories");
        Route::get("/edit-success-stories/{id}", [\App\Http\Controllers\SuccessStoriesController::class, "editSuccessStory"])->name("edit_admin_success_stories");
        Route::post("/update-success-stories", [\App\Http\Controllers\SuccessStoriesController::class, "updateSuccessStory"])->name("update_admin_success_story");
        Route::get("/delete-success-stories/{id}", [\App\Http\Controllers\SuccessStoriesController::class, "deleteSuccessStory"])->name("delete_admin_success_story");
        Route::get("/success-stories/counts", [\App\Http\Controllers\SuccessStoriesController::class, "getDashboardCounts"])->name("count_admin_success_story");


        Route::get("/gallery", [\App\Http\Controllers\GalleryController::class, "viewGallery"])->name("view_admin_gallery");
        Route::get("/add-gallery", [\App\Http\Controllers\GalleryController::class, "addGallery"])->name("add_admin_gallery");
        Route::post("/submit-gallery", [\App\Http\Controllers\GalleryController::class, "submitGalleryData"])->name("submit_admin_gallery");
        Route::get("/edit-gallery/{id}", [\App\Http\Controllers\GalleryController::class, "editGalleryData"])->name("edit_admin_gallery");
        Route::post("/update-gallery", [\App\Http\Controllers\GalleryController::class, "updateGalleryData"])->name("update_admin_gallery");
        Route::get("/delete-gallery/{id}", [\App\Http\Controllers\GalleryController::class, "destroyGalleryData"])->name("delete_admin_gallery");

        Route::get("/courses", [\App\Http\Controllers\CourseController::class, "viewCourses"])->name("view_admin_courses");
        Route::get("/add-courses", [\App\Http\Controllers\CourseController::class, "addCourses"])->name("add_admin_courses");
        Route::post("/submit-course", [\App\Http\Controllers\CourseController::class, "submitCourse"])->name("submit_admin_courses");
        Route::get("/edit-course/{id}", [\App\Http\Controllers\CourseController::class, "editSliderData"])->name("edit_admin_course");
        Route::post("/update-course", [\App\Http\Controllers\CourseController::class, "updateCourse"])->name("update_admin_course");
        Route::get("/delete-course/{id}", [\App\Http\Controllers\CourseController::class, "destroyCourse"])->name("destroy_admin_course");
        Route::get("/view-course-item/{id}", [\App\Http\Controllers\CourseController::class, "viewCourseItem"])->name("view_admin_course_item");
        Route::post("/submit-course-item", [\App\Http\Controllers\CourseController::class, "submitCourseItem"])->name("submit_admin_course_item");
        Route::post("/update-course-item", [\App\Http\Controllers\CourseController::class, "updateCourseItem"])->name("update_admin_course_item");
        Route::get("/delete-course-item/{id}", [\App\Http\Controllers\CourseController::class, "destroyCourseItem"])->name("delete_admin_course_item");
        Route::get("/courses/counts", [\App\Http\Controllers\CourseController::class, "CoursesCount"])->name("admin_courses_count");

        Route::get("/slider", [\App\Http\Controllers\SliderController::class, "viewSlider"])->name("view_admin_slider");
        Route::get("/add-slider", [\App\Http\Controllers\SliderController::class, "addSlider"])->name("add_admin_slider");
        Route::post("/submit-slider", [\App\Http\Controllers\SliderController::class, "submitSliderData"])->name("submit_slider_data");
        Route::get("/edit-slider/{id}", [\App\Http\Controllers\SliderController::class, "editSliderDate"])->name("edit_slider_data");
        Route::post("/update-slider", [\App\Http\Controllers\SliderController::class, "updateSliderData"])->name("update_slider_data");
        Route::get("/delete-slider/{id}", [\App\Http\Controllers\SliderController::class, "destroySliderData"])->name("delete_slider_data");

        Route::get("/course-category", [\App\Http\Controllers\CourseCategoryController::class, "viewCourseCategory"])->name("view_course_category");
        Route::post("/add-course-category", [\App\Http\Controllers\CourseCategoryController::class, "addCourseCategory"])->name("add_course_category");
        Route::get("/edit-course-category/{id}", [\App\Http\Controllers\CourseCategoryController::class, "getCourseCategory"])->name("get_course_category");
        Route::post("/update-course-category", [\App\Http\Controllers\CourseCategoryController::class, "updateCourseCategory"])->name("update_course_category");
        Route::get("/delete-course-category/{id}", [\App\Http\Controllers\CourseCategoryController::class, "deleteCourseCategory"])->name("delete_course_category");

        Route::get("/gallery-category", [\App\Http\Controllers\GalleryCategoryController::class, "viewGalleryCategory"])->name("view_gallery_category");
        Route::post("/add-gallery-category", [\App\Http\Controllers\GalleryCategoryController::class, "addGalleryCategory"])->name("add_gallery_category");
        Route::get("/edit-gallery-category/{id}", [\App\Http\Controllers\GalleryCategoryController::class, "getGalleryCategory"])->name("get_gallery_category");
        Route::post("/update-gallery-category", [\App\Http\Controllers\GalleryCategoryController::class, "updateGalleryCategory"])->name("update_gallery_category");
        Route::get("/delete-gallery-category/{id}", [\App\Http\Controllers\GalleryCategoryController::class, "deleteGalleryCategory"])->name("delete_gallery_category");

        Route::get("/events", [\App\Http\Controllers\EventsController::class, "viewEvents"])->name("view_events");
        Route::get("/add-events", [\App\Http\Controllers\EventsController::class, "addEvents"])->name("add_events");
        Route::post("/submit-event", [\App\Http\Controllers\EventsController::class, "submitEvent"])->name("submit_event");
        Route::get("/edit-event/{id}", [\App\Http\Controllers\EventsController::class, "editEvent"])->name("edit_event");
        Route::post("/update-event", [\App\Http\Controllers\EventsController::class, "updateEvent"])->name("update_event");
        Route::get("/delete-event/{id}", [\App\Http\Controllers\EventsController::class, "deleteEvent"])->name("delete_event");
        Route::get("/events/count", [\App\Http\Controllers\EventsController::class, "eventsCount"])->name("count_event");
        Route::post("/event-status", [\App\Http\Controllers\EventsController::class, "changeStatus"])->name("count_event");


        Route::get("/admin/repository", [\App\Http\Controllers\AdminRepositoryController::class, "viewAdminRepository"])->name("view_admin_repository");
        Route::post("/add/repository", [\App\Http\Controllers\AdminRepositoryController::class, "addAdminRepository"])->name("add_admin_repository_data");
        Route::get("/edit-repository/{id}", [\App\Http\Controllers\AdminRepositoryController::class, "getAdminRepository"])->name("get_repository_data");
        Route::post("/update-repository", [\App\Http\Controllers\AdminRepositoryController::class, "updateAdminRepository"])->name("update_admin_repository_data");
        Route::get("/delete-repository/{id}", [\App\Http\Controllers\AdminRepositoryController::class, "deleteAdminRepository"])->name("delete_admin_repository_data");



        Route::get("/repository/category", [\App\Http\Controllers\AdminRepositoryController::class, "viewAdminRepositoryCategory"])->name("view_repository_category");
        Route::post("/add/category", [\App\Http\Controllers\AdminRepositoryController::class, "addRepositoryCategory"])->name("add_repository_category");
        Route::get("/edit-repository-category/{id}", [\App\Http\Controllers\AdminRepositoryController::class, "getRepositoryCategory"])->name("edit_repository_category");
        Route::post("/update-repository-category", [\App\Http\Controllers\AdminRepositoryController::class, "updateRepositoryCategory"])->name("update_repository_category");
        Route::post("/delete-repository-category/{id}", [\App\Http\Controllers\AdminRepositoryController::class, "deleteRepositoryCategory"])->name("delete_repository_category");

        Route::get("/affiliates",[\App\Http\Controllers\AffiliatesController::class,"viewAffiliates"])->name("view_affiliates");
        Route::post("/add",[\App\Http\Controllers\AffiliatesController::class,"addAffiliates"])->name("add_affiliates");
        Route::post("/update",[\App\Http\Controllers\AffiliatesController::class,"updateAffiliates"])->name("update_affiliates");
        Route::get("/delete-affiliate/{id}",[\App\Http\Controllers\AffiliatesController::class,"destroyAffiliates"])->name("destroy_affiliates");

        Route::get("/entrepreneurs",[App\Http\Controllers\EntreprnureRegistrationController::class,"viewRegistrations"])->name("view_entrepreneurs_registrations");
        Route::get("/delete-entrepreneur/{id}",[App\Http\Controllers\EntreprnureRegistrationController::class,"deleteRegistrations"])->name("destroy_entrepreneurs_registrations");


        Route::get("/chamber",[App\Http\Controllers\ChamberRegistrationController::class,"viewChamber"])->name("view_chamber_registrations");
        Route::post("/chamber",[App\Http\Controllers\ChamberRegistrationController::class,"chamberRegistrationInternal"])->name("chamber_registrations_internal");
        Route::post("/chamber/update",[App\Http\Controllers\ChamberRegistrationController::class,"updateChamberRegistration"])->name("chamber_registrations_update");
        Route::get("/delete-chamber/{id}",[App\Http\Controllers\ChamberRegistrationController::class,"destroyChamber"])->name("destroy_chamber_registrations");


        Route::get("/newsletter",[App\Http\Controllers\NewsLetterController::class,"viewNewsletter"])->name("view_newsletter");
        Route::get("/delete-newsletter/{id}",[App\Http\Controllers\NewsLetterController::class, "deleteNewsletter"])->name("destroy_newsletter_registrations");

        Route::get("/html-editor",[App\Http\Controllers\HtmlEditorController::class,"viewHtmlEditor"])->name("view_html_editor");
        Route::get("/add-html-editor",[App\Http\Controllers\HtmlEditorController::class,"addHtmlEditor"])->name("add_html_editor");
        Route::post("/submit-html-editor",[App\Http\Controllers\HtmlEditorController::class,"submitHtmlEditor"])->name("submit_html_editor");
        Route::get("/html-editor-delete/{id}",[App\Http\Controllers\HtmlEditorController::class,"destroyHtmlEditor"])->name("destroy_html_editor");


        Route::get("about-settings", [\App\Http\Controllers\AboutTDAPController::class, "viewAboutPageSettings"])->name("about_settings");
        Route::post("about-settings", [\App\Http\Controllers\AboutTDAPController::class, "updateAboutPageSettings"])->name("update_about_settings");
        Route::get("wediv-settings", [\App\Http\Controllers\AboutWEDIVController::class, "viewWEDIVSettings"])->name("wediv_settings");
        Route::post("wediv-settings", [\App\Http\Controllers\AboutWEDIVController::class, "updateWEDIVSettings"])->name("update_wediv_settings");

        Route::get("contact-settings", [\App\Http\Controllers\ContactUsController::class, "viewContactPageSettings"])->name("contact_settings");
        Route::post("contact-settings", [\App\Http\Controllers\ContactUsController::class, "updateContactPageSettings"])->name("update_contact_settings");

        Route::get("teams", [\App\Http\Controllers\TeamController::class, "viewAllTeams"])->name("view_all_teams");
        Route::get("teams/add", [\App\Http\Controllers\TeamController::class, "addNewTeam"])->name("add_new_team");
        Route::post("teams/add", [\App\Http\Controllers\TeamController::class, "addNewTeamSave"])->name("add_new_team_save");
        Route::get("teams/edit/{id}", [\App\Http\Controllers\TeamController::class, "editTeam"])->name("edit_team");
        Route::post("teams/edit/{id}", [\App\Http\Controllers\TeamController::class, "editTeamSave"])->name("edit_team_save");


        Route::get("news", [\App\Http\Controllers\News\NewsController::class, "viewAllNews"])->name("view_all_news");
        Route::get("news/add", [\App\Http\Controllers\News\NewsController::class, "addNews"])->name("add_new_news");
        Route::post("news/add", [\App\Http\Controllers\News\NewsController::class, "addNewsSave"])->name("add_new_news_save");
        Route::get("news/edit/{id}", [\App\Http\Controllers\News\NewsController::class, "editNews"])->name("edit_news");
        Route::post("news/edit/{id}", [\App\Http\Controllers\News\NewsController::class, "editNewsUpdate"])->name("edit_news_save");
        Route::get("news/delete/{id}", [\App\Http\Controllers\News\NewsController::class, "deleteNews"])->name("delete_news");

        Route::get("faqs", [\App\Http\Controllers\FAQs\FAQsController::class, "viewAllFAQs"])->name("view_all_faqs");
        Route::get("faqs/add", [\App\Http\Controllers\FAQs\FAQsController::class, "addFaqs"])->name("add_new_faqs");
        Route::post("faqs/add", [\App\Http\Controllers\FAQs\FAQsController::class, "addFaqsSave"])->name("add_new_faqs_save");
        Route::get("faqs/edit/{id}", [\App\Http\Controllers\FAQs\FAQsController::class, "editFaqs"])->name("edit_faqs");
        Route::post("faqs/edit/{id}", [\App\Http\Controllers\FAQs\FAQsController::class, "editFaqsUpdate"])->name("edit_faqs_save");
        Route::get("faqs/delete/{id}", [\App\Http\Controllers\FAQs\FAQsController::class, "deleteFaqs"])->name("delete_faqs");


        Route::get("emailer", [\App\Http\Controllers\Emailer\EmailerController::class, "viewEmailer"])->name("view_emailer");
        Route::post("emailer", [\App\Http\Controllers\Emailer\EmailerController::class, "sendEmail"])->name("send_email");
        Route::get("get-emails/{type}", [\App\Http\Controllers\Emailer\EmailerController::class, "getRegistrationData"])->name("get_emails");

        Route::get("skills-tabs", [\App\Http\Controllers\Community\CommunityController::class, "viewAllTabs"])->name("view_all_community_tabs");
        Route::get("skill-tabs/add", [\App\Http\Controllers\Community\CommunityController::class,"addTabs"])->name("add_new_community_tabs");
        Route::post("skill-tabs/add", [\App\Http\Controllers\Community\CommunityController::class,"addtabSave"])->name("add_new_community_tabs_save");
        Route::get("skill-tabs/edit/{id}", [\App\Http\Controllers\Community\CommunityController::class,"editTab"])->name("edit_community_tabs");
        Route::post("skill-tabs/edit/{id}", [\App\Http\Controllers\Community\CommunityController::class,"editTabUpdate"])->name("edit_community_tabs_save");
        Route::get("community-tabs/delete/{id}", [\App\Http\Controllers\Community\CommunityController::class,"deleteTab"])->name("delete_community_tabs");


        Route::get("academy-tabs", [App\Http\Controllers\Academy\AcademyController::class, "viewAllTabs"])->name("view_all_academy_tabs");
        Route::get("academy-tabs/add", [App\Http\Controllers\Academy\AcademyController::class,"addTabs"])->name("add_new_academy_tabs");
        Route::post("academy-tabs/add", [App\Http\Controllers\Academy\AcademyController::class,"addtabSave"])->name("add_new_academy_tabs_save");
        Route::get("academy-tabs/edit/{id}", [App\Http\Controllers\Academy\AcademyController::class,"editTab"])->name("edit_academy_tabs");
        Route::post("academy-tabs/edit/{id}", [App\Http\Controllers\Academy\AcademyController::class,"editTabUpdate"])->name("edit_academy_tabs_save");
        Route::get("academy-tabs/delete/{id}", [App\Http\Controllers\Academy\AcademyController::class,"deleteTab"])->name("delete_academy_tabs");

        Route::get("framework", [App\Http\Controllers\Framework\FrameworkController::class,"viewAll"])->name("view_all_frameworks");
        Route::get("framework/add", [App\Http\Controllers\Framework\FrameworkController::class,"addFramework"])->name("add_new_framework");
        Route::post("framework/add", [App\Http\Controllers\Framework\FrameworkController::class,"addFrameworkSave"])->name("add_new_framework_save");
        Route::get("framework/edit/{id}", [App\Http\Controllers\Framework\FrameworkController::class,"editFramework"])->name("edit_framework");
        Route::post("framework/edit/{id}", [App\Http\Controllers\Framework\FrameworkController::class,"editFrameworkUpdate"])->name("edit_framework_save");
        Route::get("framework/delete/{id}", [App\Http\Controllers\Framework\FrameworkController::class,"deleteFramework"])->name("delete_framework");

        Route::get("offices",[App\Http\Controllers\OfficesController::class,"viewAllOffices"])->name("view_all_offices");
        Route::post("offices",[App\Http\Controllers\OfficesController::class,"addOffice"])->name("add_office_detail");
        Route::post("office-update",[App\Http\Controllers\OfficesController::class,"updateOffice"])->name("update_office_detail");
        Route::get("office-delete/{id}",[App\Http\Controllers\OfficesController::class,"deleteOffice"])->name("delete_office_detail");
    });
});


