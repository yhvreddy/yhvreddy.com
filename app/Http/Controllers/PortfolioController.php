<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use App\PortfolioModel;
class PortfolioController extends Controller
{
    /*
    * Containing Global Data.
    * */
    public function __construct()
    {
        $this->middleware('auth');
        $this->userdata = Auth::user();
        $this->portfolio = new PortfolioModel;
    }

    /*
    *   Projects
    * */
    public function index()
    {
        $types = $this->portfolio->projectypes();
        $companys = $this->portfolio->companyname();
        $skills = $this->portfolio->skills();
        return view('admin.project_Add',compact('types','companys','skills'));
    }

    /*
    *   Save Project Details
    * */
    public function saveprojectdetails(Request $request)
    {
        $project = $this->portfolio->saveproject($request);
        if($project != 0){
            return $this->success($request->projectName.' Project details as successfully saved.','/home/projectlist');
        }else{
            return $this->failed($request->projectName.' Project details as failed to save.','/home/addproject');
        }
    }

    /*
    *   Projects List
    * */
    public function projectlist()
    {
        $projects = $this->portfolio->projectsList();
        return view('admin.projectList',compact('projects'));
    }

    /*
    *   Delete Project
    * */
    public function deleteproject(Request $request)
    {
        $delete = $this->portfolio->deleteproject($request);
        if($delete != 0){
            return $this->success('Project details as successfully delete.','/home/projectlist');
        }else{
            return $this->failed('Project details as failed to delete.','/home/projectlist');
        }
    }
}
