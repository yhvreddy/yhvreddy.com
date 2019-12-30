<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
class WebsiteModel extends DefaultModel
{
    public function aboutdetails()
    {
        $data = $this->select_where('portfolio_self_introduction',array('status'=>1));
        return $data;
    }
    
    public function experiencesdetails()
    {
        $data = $this->select_where('portfolio_experiences',array('status'=>1));
        return $data;
    }
    
    public function servicesdetails()
    {
        $data = $this->select_where('portfolio_services',array('status'=>1));
        return $data;
    }
    
    public function educationList()
    {
        $data = $this->select_where('portfolio_education',array('status'=>1));
        return $data;
    }
    
    public function skillslist()
    {
        $data = $this->select_where('portfolio_skills',array('status'=>1));
        return $data;
    }
    
    public function projectsTypes()
    {
        $data = $this->select_where('portfolio_formdata',array('type'=>'portfolio','status'=>1));
        return $data;
    }
    
    public function testimonials()
    {
        $data = $this->select_where('portfolio_testimonials',array('status'=>1));
        return $data;
    }

    public function saveContactdetails($input)
    {
        $datainsert = array('name'=>$input['name'],'email'=>$input['mobile'],'mobile'=>$input['mobile'],'content'=>$input['content']);
        $data = $this->insert_data('portfolio_contactus',$datainsert);
        return $data;
    }

    public function skills()
    {
        $data = $this->select_where('portfolio_skills',array('status'=>1));
        return $data;
    }

    public function projectslist()
    {
        $data = DB::table('portfolio_projects')
                ->join('portfolio_formdata','portfolio_formdata.short_name','=','portfolio_projects.project_type')
                ->join('portfolio_experiences','portfolio_experiences.id','=','portfolio_projects.company_id')
                ->select('portfolio_projects.*','portfolio_formdata.name as project','portfolio_experiences.company_name as company_name')
                ->where(array('portfolio_projects.status'=>1))
                ->orderBy('portfolio_projects.id','DESC')
                ->get();
        return $data;
    }
    
    public function projectdetails($request)
    {
        $data = DB::table('portfolio_projects')
                ->join('portfolio_formdata','portfolio_formdata.id','=','portfolio_projects.project_type')
                ->select('portfolio_projects.*','portfolio_formdata.name as project')
                ->where(array('portfolio_projects.id'=>$request->id))
                ->orderBy('portfolio_projects.id','DESC')
                ->get();
        return $data;
    }
}
