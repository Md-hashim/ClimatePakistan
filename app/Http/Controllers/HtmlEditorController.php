<?php

namespace App\Http\Controllers;

use App\Interfaces\HtmlEditorInterface;
use App\Repositories\HtmlEditorRepository;
use Illuminate\Http\Request;
use Exception;

class HtmlEditorController extends Controller
{
    private HtmlEditorRepository $htmlEditorRepository;
    private HtmlEditorInterface $htmlEditorInterface;

    /**
     * @param HtmlEditorRepository $htmlEditorRepository
     * @param HtmlEditorInterface $htmlEditorInterface
     */
    public function __construct(HtmlEditorRepository $htmlEditorRepository, HtmlEditorInterface $htmlEditorInterface)
    {
        $this->htmlEditorRepository = $htmlEditorRepository;
        $this->htmlEditorInterface = $htmlEditorInterface;
    }


    public function viewHtmlEditor()
    {
        $page_builder=$this->htmlEditorRepository->viewAllData();
        return view('admin.htmlEditor.html_editor',['page_builder'=>$page_builder]);
    }

    public function addHtmlEditor()
    {
        return view ('admin.htmlEditor.add');
    }

    public function submitHtmlEditor(Request $request)
    {
        try {
      $title=$request->get("page_title");
      $meta_tag=$request->get("meta_tag");
      $meta_description=$request->get("meta_description");
      $html=$request->get("html");

      $this->htmlEditorRepository->addEditorData(pageTitle: $title,metaTag: $meta_tag,MetaDescription: $meta_description,Html: $html);
      return redirect()->route('view_html_editor')->with("success","Page builder data added successfully");

        }
        catch (Exception $exception)
        {
//            dd($exception);
            return redirect()->route('view_html_editor')->with("error","Page builder data added successfully");
        }
    }

    public function destroyHtmlEditor($id)
    {

        try {
            $this->htmlEditorRepository->destroyData($id);
            return redirect()->route('view_html_editor')->with("success","Page builder data deleted successfully");

        }
        catch (Exception $exception)
        {
            return redirect()->route('view_html_editor')->with("error","Something Went Wrong");
        }

    }

}
