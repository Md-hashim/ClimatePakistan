<?php

namespace App\Http\Controllers\Emailer;

use App\Http\Controllers\Controller;
use App\Mail\AnnouncementMail;
use App\Models\ChamberRegistration;
use App\Models\EntreprnureRegistration;
use App\Models\NewsLetter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailerController extends Controller
{

    public function viewEmailer(Request $request)
    {
        return view("admin.emailer.emailer");
    }

    public function getRegistrationData($type)
    {
        switch ($type) {
            case 'Chamber Registrations':
                $data = ChamberRegistration::pluck("email")->toArray();
                return response()->json(['data' => $data]);
                break;

            case 'Chamber Registrations Internal':
                $data = ChamberRegistration::where(["type"=>"Internal"])->pluck("email")->toArray();
                return response()->json(['data' => $data]);
                break;

            case 'Chamber Registrations External':
                $data = ChamberRegistration::where(["type"=>"External"])->pluck("email")->toArray();
                return response()->json(['data' => $data]);
                break;

            case 'Entrepreneurs':
                $data = EntreprnureRegistration::pluck("email")->toArray();
                return response()->json(['data' => $data]);
                break;

            case 'Newsletter Registrations':
                $data = NewsLetter::pluck("email")->toArray();
                return response()->json(['data' => $data]);
                break;

            default:
                return response()->json(['error' => 'Invalid type']);
        }
    }

    public function sendEmail(Request $request)
    {
        try {
            $type = $request->get("type");
            $receivers = $request->get("emails");
            $data = [];
            if (in_array('all', $receivers)) {
                switch ($type) {
                    case 'Chamber Registrations':
                        $data = ChamberRegistration::pluck("email")->toArray();
                        break;

                    case 'Entrepreneurs':
                        $data = EntreprnureRegistration::pluck("email")->toArray();
                        break;

                    case 'Newsletter Registrations':
                        $data = NewsLetter::pluck("email")->toArray();
                        break;

                    default:
                        $data = [];
                }
            } else {
                $data = $receivers;
            }
            Mail::to($data)->send(new AnnouncementMail(subject: $request->get("subject"), body: $request->get("content")));

            return redirect()->back()->with("success", "Email sent successfully");
        } catch (Exception $exception) {
            return redirect()->back()->with("error", "Something went wrong");
        }
    }
}
