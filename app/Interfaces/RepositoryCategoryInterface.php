<?php

namespace App\Interfaces;

interface RepositoryCategoryInterface
{

    public function getRepositoryCategories();
    public function addRepositoryCategories($name);
//
    public function getRepositoryCategory($id);
//
    public function updateRepositoryCategory($id,$name);
//
    public function deleteRepositoryCategory($id);


}
