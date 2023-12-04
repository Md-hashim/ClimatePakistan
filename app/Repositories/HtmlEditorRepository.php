<?php
namespace App\Repositories;
use App\Interfaces\HtmlEditorInterface;
use App\Models\HtmlEditor;

class HtmlEditorRepository implements HtmlEditorInterface
{

    public function viewAllData()
    {
        // TODO: Implement viewAllData() method.
        return HtmlEditor::all();
    }

    public function addEditorData($pageTitle, $metaTag, $MetaDescription, $Html)
    {
        // TODO: Implement addEditorData() method.
        $editor=new HtmlEditor([
            'page_title'=>$pageTitle,
//            'slug'=>$slug,
            'meta_tag'=>$metaTag,
            'meta_description'=>$MetaDescription,
            'html'=>$Html,
        ]);
        $editor->save();
        return $editor;
    }

    public function editEditorData($id)
    {
        // TODO: Implement editEditorData() method.
    }

    public function updateEditorData($id, $pageTitle, $slug, $metaTag, $MetaDescription, $Html)
    {
        // TODO: Implement updateEditorData() method.
    }

    public function destroyData($id)
    {
        // TODO: Implement destroyData() method.
        return HtmlEditor::where(["id"=>$id])->delete();
    }
}
