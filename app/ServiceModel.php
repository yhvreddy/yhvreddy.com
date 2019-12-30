<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\DefaultModel;
use DB;

class ServiceModel extends DefaultModel
{
    /*
    *   Insert Data
    * */
    public function insertData($request)
    {
        $uploadimage = $this->uploadfile($request,'serviceImage','services');
        $insertdata = array('service_name' => $request->serviceName, 'service_image' => $uploadimage, 'service_icon' => $request->serviceIcon, 'service_content' => $request->serviceContent);
        $service = $this->insert_data('portfolio_services',$insertdata);
        return $service;
    }

    /*
    *  Services List
    * */
    public function servciesList()
    {
        $data = $this->select_where('portfolio_services',array('status'=>1));
        return $data;
    }

    /*
    * Delete Services
    * */
    public function deleteservice($request)
    {
        $delete = $this->delete_data('portfolio_services',array('id'=>$request->id));
        return $delete;
    }
}
