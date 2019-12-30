<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;
class AboutusModel extends DefaultModel
{
    public function saveaboutus($request)
    {
        //dd($request);

        if(isset($request->edit_id) && !empty($request->edit_id)){

            $uploadresume   = $this->uploadfile($request,'UplaodResume','resume',$request->uploadedresume);
            $uploadlogo     = $this->uploadfile($request,'LogoImage','sitedetails',$request->uploadedlogo);
            $uploadbanner   = $this->uploadfile($request,'BannerImage','banner',$request->uploadedbannerimg);
            $uploadaboutimg = $this->uploadfile($request,'AboutImage','aboutus',$request->uploadedaboutimg);
            $uploadortherimg= $this->uploadfile($request,'OtherImage','otherfiles',$request->uploadedotherfile);

            $insertdata = array(
                'first_name'         =>  $request->firstName,
                'last_name'          =>  $request->lastName,
                'middel_name'        =>  $request->middelName,
                'mobile'             =>  $request->mobile,
                'email'              =>  $request->email,
                'resume'             =>  $uploadresume,
                'profession'         =>  $request->profession,
                'short_description'  =>  $request->shortContent,
                'description'        =>  $request->Content,
                'logo'               =>  $uploadlogo,
                'banner_img'         =>  $uploadbanner,
                'about_img'          =>  $uploadaboutimg,
                'other_img'          =>  $uploadortherimg,
                'facebook'           =>  $request->facebook,
                'linkedin'           =>  $request->linkedin,
                'twitter'            =>  $request->twitter,
                'github'             =>  $request->github,
                'instagram'          =>  $request->instagram,
            );

            $aboutus = $this->update_data('portfolio_self_introduction',array('id' => $request->edit_id),$insertdata);

        }else{
            $uploadresume   = $this->uploadfile($request,'UplaodResume','resume');
            $uploadlogo     = $this->uploadfile($request,'LogoImage','sitedetails');
            $uploadbanner   = $this->uploadfile($request,'BannerImage','banner');
            $uploadaboutimg = $this->uploadfile($request,'AboutImage','aboutus');
            $uploadortherimg= $this->uploadfile($request,'OtherImage','otherfiles');

            $insertdata = array(
                'first_name'         =>  $request->firstName,
                'last_name'          =>  $request->lastName,
                'middel_name'        =>  $request->middelName,
                'mobile'             =>  $request->mobile,
                'email'              =>  $request->email,
                'resume'             =>  $uploadresume,
                'profession'         =>  $request->profession,
                'short_description'  =>  $request->shortContent,
                'description'        =>  $request->Content,
                'logo'               =>  $uploadlogo,
                'banner_img'         =>  $uploadbanner,
                'about_img'          =>  $uploadaboutimg,
                'other_img'          =>  $uploadortherimg,
                'facebook'           =>  $request->facebook,
                'linkedin'           =>  $request->linkedin,
                'twitter'            =>  $request->twitter,
                'github'             =>  $request->github,
                'instagram'          =>  $request->instagram,
            );

            $aboutus = $this->insert_data('portfolio_self_introduction',$insertdata);
        }

        
        return $aboutus;
    }

    public function aboutdetails()
    {
        $data = $this->select_where('portfolio_self_introduction',array('status'=>1));
        return $data;
    }


    public function educationList()
    {
        $data = $this->select_where('portfolio_education',array('status'=>1));
        return $data;
    }

    public function educationsave($request)
    {
        $insertdata = array('education'=>$request->qualification,'institute_name'=>$request->schoolCollegeName,'university'=>$request->universityName,'percent_age'=>$request->percentage,'pass_out'=>$request->passout,'location'=>$request->location,'content'=>$request->Content);
        $insert = $this->insert_data('portfolio_education',$insertdata);
        return $insert;
    }

    public function deleteducation($request)
    {
        $delete = $this->delete_data('portfolio_education',array('id'=>$request->id));
        return $delete;
    }

    public function experenceList()
    {
        $data = $this->select_where('portfolio_experiences',array('status'=>1));
        return $data;
    }

    public function experencesave($request)
    {
        if(!empty($request->joindate)){ $joindate = date('Y-m-d',strtotime($request->joindate)); }else{ $joindate = ''; }

        if(!empty($request->reginationdate)){ $reginationdate = date('Y-m-d',strtotime($request->reginationdate)); }else{ $reginationdate = ''; }

        $insertdata = array('company_name'=>$request->companyName,'degination'=>$request->degination,'experience'=>$request->experence,'salary'=>$request->salary,'join_date'=>$joindate,'end_date'=>$reginationdate,'location'=>$request->location,'content'=>$request->Content);
        $insert = $this->insert_data('portfolio_experiences',$insertdata);
        return $insert;
    }

    public function deletexperence($request)
    {
        $delete = $this->delete_data('portfolio_experiences',array('id'=>$request->id));
        return $delete;
    }
}
