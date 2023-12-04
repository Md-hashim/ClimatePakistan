<?php

namespace App\Http\Controllers;

use App\Interfaces\NewsLetterInterface;
use App\Models\ChamberRegistration;
use App\Models\NewsLetter;
use App\Repositories\NewsLetterRepository;
use Exception;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    private NewsLetterRepository $newsletterRepository;
    private NewsLetterInterface $newsLetterInterface;

    //

    /**
     * @param NewsLetterRepository $letterRepository
     * @param NewsLetterInterface $newsLetterInterface
     */
    public function __construct(NewsLetterRepository $letterRepository, NewsLetterInterface $newsLetterInterface)
    {
        $this->newsletterRepository = $letterRepository;
        $this->newsLetterInterface = $newsLetterInterface;
    }

    public function viewNewsletter()
    {
        $newsletter = $this->newsletterRepository->viewAll();
        return view("admin.newsletter.newsletter",["newsletter"=>$newsletter]);
    }

    public function newsletterRegistration(Request $request){

        try {
            $register = new NewsLetter([
                "email"=>$request->get("email"),
            ]);

            $register->save();
            return redirect()->back()->with('success', 'Newsletter subscribed successfully.');

        }
        catch (Exception $exception){
            return redirect()->back()->with('error', 'Something went wrong. Please try again!');
        }

    }



    public function deleteNewsletter($id){
        try {
           NewsLetter::where(["id"=>$id])->delete();
            return redirect()->back()->with('success', 'Email deleted successfully.');

        }
        catch (Exception $exception){
            return redirect()->back()->with('error', 'Something went wrong. Please try again!');
        }
    }

    public function addNewsLetter(Request $request)
    {
        $email = $request->get("email");
        $this->newsletterRepository->addData(email: $email);
        return redirect()->route("view_home_page");
    }
}
