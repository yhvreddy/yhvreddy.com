<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
class SkillsModel extends DefaultModel
{
    /*
    *  Insert Data
    * */
    public function insertSkills($request)
    {
        //dd($request);
        $insertdata = array('name'=>$request->skillName,'experience'=>$request->experence,'rating'=>$request->rating);
        $insert = $this->insert_data('portfolio_skills',$insertdata);
        return $insert;
    }

    /*
    *  Skills List
    * */
    public function skillsList()
    {
        $data = $this->select_where('portfolio_skills',array('status'=>1));
        return $data;
    }

    /*
    *   Delete Skills
    * */
    public function deleteskills($request)
    {
        $delete = $this->update_data('portfolio_skills',array('id' => $request->id),array('status' => 0));
        return $delete;
    }
}
