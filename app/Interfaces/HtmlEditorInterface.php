<?php

namespace App\Interfaces;

interface HtmlEditorInterface
{
    public function viewAllData();
    public function addEditorData($pageTitle,$metaTag,$MetaDescription,$Html);
    public function editEditorData($id);
    public function updateEditorData($id,$pageTitle,$slug,$metaTag,$MetaDescription,$Html);
    public function destroyData($id);
}
