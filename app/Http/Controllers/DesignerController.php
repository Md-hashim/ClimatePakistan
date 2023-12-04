<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class DesignerController extends Controller
{
    private $DesignerCards;

    public function __construct()
    {
        $this->DesignerCards = json_decode(file_get_contents(public_path('json/designerCards.json')), true);

    }

    //
    public function viewDesigner()
    {
        $settings = Settings::first();
        return view('website.designer.designer', [ "settings"=>$settings]);
    }

    public function viewDesignerCards($type)
    {
        $settings = Settings::first();
        $matchedType = collect($this->DesignerCards)->firstWhere('type', $type);
//        dd($matchedType);

        if ($matchedType && isset($matchedType['cards'])) {
            $cardsOfType = $matchedType['cards'];
            return view('website.designer.allCards', ['cards' => $cardsOfType, "settings"=>$settings,"type"=>$type]);
        } else {
            return back()->with('error', 'No cards found for the selected type.');
        }
    }


    public function viewCardForm($templateName)
    {
        $settings = Settings::first();
        return view('website.designer.card_form', ['templateName' => $templateName,"settings"=>$settings]);
    }
    public function viewBrochureForm($templateName)
    {
        $settings = Settings::first();
        return view('website.designer.brochure_card_form', ['templateName' => $templateName,"settings"=>$settings]);
    }

    public function submitCardForm(Request $request)
    {
        $settings = Settings::first();
        $templateName = $request->get('template_name');
        $userData = $request->all();
        $name = $userData["name"] ?? '';
        $formattedName = strlen($name) > 30 ? wordwrap($name, 20, "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>\n", true) : $name;//
        $address = $userData["address"] ?? '';
        $formattedAddress = strlen($address) > 30 ? wordwrap($address, 30, "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>\n", true) : $address;//        dd($formattedAddress);
        $image = $request->file('image');

        if ($image) {
            $path = $image->getRealPath();
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        } else {
            $base64 = null; // Handle cases where no image was uploaded
        }

        $view = "website.designer.cards.".$templateName;
        return view($view, [
            'userData' => $userData,
            'imageData' => $base64,
            "settings"=>$settings,
            "address"=>$formattedAddress,
            "name"=>$formattedName
        ]);
    }

    public function submitBrochureForm(Request $request)
    {
        $settings = Settings::first();
        $templateName = $request->get('template_name');
        $userData = $request->all();

        $image = $request->file('image');

        if ($image) {
            $path = $image->getRealPath();
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        } else {
            $base64 = null; // Handle cases where no image was uploaded
        }

        $view = "website.designer.cards.".$templateName;
        return view($view, [
            'userData' => $userData,
            'imageData' => $base64,
            "settings"=>$settings,

        ]);
    }

}
