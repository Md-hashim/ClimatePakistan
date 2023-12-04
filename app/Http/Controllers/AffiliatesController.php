<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Interfaces\AffiliatesInterface;
use App\Repositories\AffiliatesRepository;
use Illuminate\Http\Request;
use Exception;

class AffiliatesController extends Controller
{
    private AffiliatesRepository $affiliatesRepository;
    private AffiliatesInterface $affiliatesInterface;

    /**
     * @param AffiliatesRepository $affiliatesRepository
     * @param AffiliatesInterface $affiliatesInterface
     */
    public function __construct(AffiliatesRepository $affiliatesRepository, AffiliatesInterface $affiliatesInterface)
    {
        $this->affiliatesRepository = $affiliatesRepository;
        $this->affiliatesInterface = $affiliatesInterface;
    }

    public function viewAffiliates()
    {
        $affiliates= $this->affiliatesRepository->viewAll();
        return view("admin.affiliates.affiliates",["affiliates"=>$affiliates]);
    }

    public function addAffiliates(Request $request)
    {
        try{
            $title = $request->get('title');
            $description = $request->get('description');
            if($icon = $request->file("icon")){
                $helper = new Helper();
                $icon=$helper->storeImage($icon,"Affiliates");
            }

            $this->affiliatesRepository->addData(title: $title, icon: $icon, description: $description);
            return redirect()->route("view_affiliates")->with("success","Affiliate added successfully");
        }
        catch(Exception $exception)
        {
            return redirect()->route("view_affiliates")->with("error","Something went wrong.Please contact Support!");
        }

    }

    public function updateAffiliates(Request $request)
    {
        try{
            $id = $request->get('id');
            $title=$request->get('edit_title');
            $description = $request->get('edit_description');
            if($icon=$request->file('edit_icon'))
            {
                $helper = new Helper();
                $icon=$helper->storeImage($icon,"Affiliates");
            }
            $this->affiliatesRepository->updateData(id: $id, title: $title, icon: $icon, description: $description);
            return redirect()->route("view_affiliates")->with("success","Affiliate updated successfully");
        }
        catch(Exception $exception)
        {
            return redirect()->route("view_affiliates")->with("error","Something went wrong.Please contact Support!");
        }
    }

    public function destroyAffiliates($id)
    {
        try{
            $this->affiliatesRepository->deleteItem($id);
            return redirect()->route("view_affiliates")->with("success","Affiliate deleted successfully");
        }
        catch (Exception $exception){
            return redirect()->route("view_affiliates")->with("error","Something went wrong.Please contact Support!");
        }
    }
}
