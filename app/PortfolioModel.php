<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
class PortfolioModel extends DefaultModel
{
    public function projectypes()
    {
        $data = $this->select_where('portfolio_formdata',array('status'=>1,'type'=>'portfolio'));
        return $data;
    }

    public function companyname()
    {
        $data = $this->select_where('portfolio_experiences',array('status'=>1));
        return $data;
    }

    public function skills()
    {
        $data = $this->select_where('portfolio_skills',array('status'=>1));
        return $data;
    }

    public function saveproject($request)
    {
        //dd($request);
        $uploadimage = $this->uploadfile($request,'UplaodCoureImage','projects');

        if(!empty($request->startingdate)){ $sdate = date('Y-m-d',strtotime($request->startingdate)); }else{ $sdate = ''; }

        if($request->endingdate != $request->startingdate){ $edate = date('Y-m-d',strtotime($request->endingdate)); }else{ $edate = ''; }

        $insertdata = array('project_name' => $request->projectName,'project_duration' => $request->duration,'project_type' => $request->project_type, 'project_skills'=>serialize($request->skills), 'project_cover_img' => $uploadimage, 'project_link' => $request->project_url,'start_date' => $sdate, 'end_date' => $edate, 'project_mode' => $request->project_mode, 'company_id' => $request->company_name, 'client_name' => $request->clientName,'project_content' => $request->Content, 'mini_content' => $request->ShortContent, 'github' => $request->github);
        $projects = $this->insert_data('portfolio_projects',$insertdata);
        return $projects;
    }

    public function projectsList()
    {
        $data = $this->select_where('portfolio_projects',array('status'=>1));
        return $data;
    }

    public function deleteproject($request)
    {
        $delete = $this->delete_data('portfolio_projects',array('id'=>$request->id));
        return $delete;
    }
}
