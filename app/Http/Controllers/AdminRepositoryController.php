<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Interfaces\AdminFilesInterface;
use App\Interfaces\RepositoryCategoryInterface;
use App\Repositories\AdminFilesRepository;
use App\Repositories\RepositoryCategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class AdminRepositoryController extends Controller
{
private RepositoryCategoryRepository $repositoryCategory;
private RepositoryCategoryInterface $repositoryCategoryInterface;

private AdminFilesRepository $adminFilesRepository;
private AdminFilesInterface $adminFilesInterface;

    /**
     * @param RepositoryCategoryRepository $repositoryCategory
     * @param RepositoryCategoryInterface $repositoryCategoryInterface
     * @param AdminFilesRepository $adminFilesRepository
     * @param AdminFilesInterface $adminFilesInterface
     */
    public function __construct(RepositoryCategoryRepository $repositoryCategory, RepositoryCategoryInterface $repositoryCategoryInterface, AdminFilesRepository $adminFilesRepository, AdminFilesInterface $adminFilesInterface)
    {
        $this->repositoryCategory = $repositoryCategory;
        $this->repositoryCategoryInterface = $repositoryCategoryInterface;
        $this->adminFilesRepository = $adminFilesRepository;
        $this->adminFilesInterface = $adminFilesInterface;
    }


    public function viewAdminRepository()
    {
        $categories = $this->repositoryCategory->getRepositoryCategories();
        $repositoryData=$this->adminFilesRepository->getRepositoryData();
        return view('admin.repository.admin_repository',["categories"=>$categories,"repositoryData"=>$repositoryData]);
    }
    public function addAdminRepository(Request $request)
    {

        try
        {
            $title=$request->get('title');
            $category=$request->get('cat_id');
            if($file=$request->file('file'))
            {
                $helper= new Helper();
                $file= $helper->storeFile($file,'AdminRepository');
            }
           $this->adminFilesRepository->submitRepositoryData(title: $title,file: $file,categoryId: $category);

            return redirect()->route("view_admin_repository")->with("success", "Repository Data added  successfully!");

        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_admin_repository")->with("error", "Something went wrong! Contact support");
        }
    }

    public function getAdminRepository($id)
    {
        try
        {
            $data = $this->adminFilesRepository->getRepositoryDataById($id);
            return response()->json(['data'=>$data],200);
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return response()->json(["data" => null], 404);

        }
    }

    public function updateAdminRepository(Request $request)
    {
        try
        {
            $id= $request->get('id');

            $category = $request->get('cat_id');
            $title = $request->get('title');
            if($file=$request->file('file'))
            {
                $helper= new Helper();
                $file= $helper->storeImage($file,'Admin Repository');
            }
            $this->adminFilesRepository->updateRepositoryData(id: $id, categoryId: $category, title: $title, file: $file);

            return redirect()->route("view_admin_repository")->with("success", "Repository Category updated  successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_admin_repository")->with("error", "Something went wrong! Contact support");
        }

    }

    public function deleteAdminRepository($id)
    {
        try {
            $this->adminFilesRepository->destroyRepositoryData($id);
            return redirect()->route("view_admin_repository")->with("success", "Repository deleted  successfully!");
        }
        catch(Exception $exception)
        {

            Log::error($exception);
            return redirect()->route("view_admin_repository")->with("error", "Something went wrong! Contact support");
        }
    }





            //Admin Repository Category Code:Start
    public function viewAdminRepositoryCategory()
    {
        $categories = $this->repositoryCategory->getRepositoryCategories();
        return view('admin.repository.repository_category',["categories"=>$categories]);
    }

    public function addRepositoryCategory(Request $request)
    {

        try
        {
            $name=$request->get('name');
            $this->repositoryCategory->addRepositoryCategories(name:$name);

            return redirect()->route("view_repository_category")->with("success", "Repository Category added  successfully!");

        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_repository_category")->with("error", "Something went wrong! Contact support");
        }
    }

    public function getRepositoryCategory($id)
    {
        try
        {
            $category = $this->repositoryCategory->getRepositoryCategory($id);


            return response()->json(['category'=>$category],200);
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return response()->json(["category" => null], 404);

        }
    }

    public function updateRepositoryCategory(Request $request)
    {
        try
        {
            $id= $request->get('id');
            $name = $request->get('cat_name');
            $this->repositoryCategory->updateRepositoryCategory(id:$id,name:$name);

            return redirect()->route("view_repository_category")->with("success", "Repository Category updated  successfully!");
        }
        catch(Exception $exception)
        {
            Log::error($exception);
            return redirect()->route("view_repository_category")->with("error", "Something went wrong! Contact support");
        }

    }

    public function deleteRepositoryCategory($id)
    {
        try {
            $this->repositoryCategory->deleteRepositoryCategory($id);
            return redirect()->route("view_course_category")->with("success", "Repository Category deleted  successfully!");
        }
        catch(Exception $exception)
        {

            Log::error($exception);
            return redirect()->route("view_course_category")->with("error", "This Category is associated with the course.Please update or delete Course Category ");
        }
    }
}
