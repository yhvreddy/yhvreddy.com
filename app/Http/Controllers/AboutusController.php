<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use App\AboutusModel;
class AboutusController extends Controller
{
    /*
    * Containing Global Data.
    * */
    public function __construct()
    {
        $this->middleware('auth');
        $this->userdata = Auth::user();
        $this->aboutus = new AboutusModel;
    }

    /*
    *   About us
    * */
    public function index()
    {
        $aboutus = $this->aboutus->aboutdetails();
        return view('admin.aboutus',compact('aboutus'));
    }

    /*
    *   Save Aboutus data
    * */
    public function saveAboutusData(Request $request)
    {
        $aboutus = $this->aboutus->saveaboutus($request);
        if($aboutus != 0){
            return $this->success('Aboutus details as successfully inserted.','/home/aboutus');
        }else{
            return $this->failed('Aboutus details as failed to insert.','/home/aboutus');
        }
    }

    /*
    *   Education Section
    * */
    public function education()
    {
        $education = $this->aboutus->educationList();
        return view('admin.education',compact('education'));
    }

    /*
    *   Save Education
    * */
    public function educationsave(Request $request)
    {
        $education = $this->aboutus->educationsave($request);
        if($education != 0){
            return $this->success('Education details as successfully saved.','/home/education');
        }else{
            return $this->failed('Education details as failed to save.','/home/education');
        }
    }

    /*
    *   Delete Education Details
    * */
    public function deleteducation(Request $request)
    {
        $delete = $this->aboutus->deleteducation($request);
        if($delete != 0){
            return $this->success('Education details as successfully delete.','/home/education');
        }else{
            return $this->failed('Education details as failed to delete.','/home/education');
        }
    }

    /*
    *   Experence Section
    * */
    public function experence()
    {
        $exprences = $this->aboutus->experenceList();
        return view('admin.exprences',compact('exprences'));
    }

    /*
    *   Save Experence
    * */
    public function experencesave(Request $request)
    {
        $exprences = $this->aboutus->experencesave($request);
        if($exprences != 0){
            return $this->success('Experence details as successfully saved.','/home/experence');
        }else{
            return $this->failed('Experence details as failed to save.','/home/experence');
        }
    }

    /*
    * Delete Experence
    * */
    public function deletexperence(Request $request)
    {
        $delete = $this->aboutus->deletexperence($request);
        if($delete != 0){
            return $this->success('Experence details as successfully deleted.','/home/experence');
        }else{
            return $this->failed('Experence details as failed to delete.','/home/experence');
        }
    }

}
