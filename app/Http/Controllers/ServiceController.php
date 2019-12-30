<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use App\ServiceModel;
class ServiceController extends Controller
{
    /*
    * Containing Global Data.
    * */
    public function __construct()
    {
        $this->middleware('auth');
        $this->userdata = Auth::user();
        $this->services = new ServiceModel;
    }

    public function index()
    {
        $services = $this->services->servciesList();
        return view('admin.services',compact('services'));
    }

    public function saveServiceData(Request $request)
    {
        $service = $this->services->insertData($request);
        if($service != 0){
            return $this->success($request->serviceName.' as successfully inserted.','/home/services');
        }else{
            return $this->failed($request->serviceName.' as failed to insert.','/home/services');
        }
    }

    public function deleteservicedetails(Request $request)
    {
        $delete = $this->services->deleteservice($request);
        if($delete != 0){
            return $this->success('Service Details as successfully deleted.','/home/services');
        }else{
            return $this->failed('Service Details as failed to delete.','/home/services');
        }
    }
}
