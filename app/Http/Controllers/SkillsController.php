<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use App\SkillsModel;
class SkillsController extends Controller
{
    /*
    * Containing Global Data.
    * */
    public function __construct()
    {
        $this->middleware('auth');
        $this->userdata = Auth::user();
        $this->skills = new SkillsModel;
    }

    public function index()
    {
        $skills = $this->skills->skillsList();
        return view('admin.skills_add',compact('skills'));
    }

    public function saveSkillsData(Request $request)
    {
        $insert = $this->skills->insertSkills($request);
        if($insert != 0){
           return $this->success($request->skillName.' as successfully inserted.','/home/addskills');
        }else{
           return $this->failed($request->skillName.' as failed to insert.','/home/addskills');
        }
    }

    public function deleteskills(Request $request)
    {
        $delete = $this->skills->deleteskills($request);
        if($delete != 0){
            return $this->success('Skill as successfully deleted.','/home/addskills');
         }else{
            return $this->failed('Skill as failed to insert.','/home/addskills');
         }
    }
}
