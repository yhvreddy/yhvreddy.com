<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\WebsiteModel;
class WebsiteController extends Controller
{
    /*
    * Containing Global Data.
    * */
    public function __construct()
    {
        $this->website = new WebsiteModel;
        $this->aboutdetails = $this->website->aboutdetails();
        $this->projects = $this->website->projectslist();
        $this->experences = $this->website->experiencesdetails();
        $this->services =   $this->website->servicesdetails();
        $this->skills   =   $this->website->skillslist();
        $this->projectypes = $this->website->projectsTypes();
        $this->testimonials =   $this->website->testimonials();
        $this->skills       =   $this->website->skills();
    }

    public function index()
    {
        $aboutdetails = $this->aboutdetails;
        $projects = $this->projects;
        $experences = $this->experences;
        $services = $this->services;
        $educations = $this->website->educationList();
        $projectypes = $this->projectypes;
        $testimonials = $this->testimonials;
        $skills = $this->skills;
        return view('home_page',compact('aboutdetails','projects','experences','services','educations','projectypes','testimonials','skills'));
    }


    public function ajaxRequestPost(Request $request)
    {

        $input = $request->all();
        $insert  = $this->website->saveContactdetails($input);
        if($insert != 0){
            //send mail
            $to = "yhvreddyjobs@gmail.com";
            $subject = "New portfolio request form ".$input['name'];
            $txt = "Hi.. I'm ".$input['name']."\n Enquery Details : \n Name : ".$input['name'].", Mobile : ".$input['mobile']." Mail id : ".$input['email']." Content \n ".$input['content'];
            $headers = "From: ".$input['email']. "\r\n" .
            "CC: yhvreddyinfo@gmail.com";
            @mail($to,$subject,$txt,$headers);
            $responce = array('status'=>1,'Message'=>'Your request as sent.we will respond as soon..! ThankQ');
        }else{
            $responce = array('status'=>0,'Message'=>'Your request as failed to sent. Please try agin later or contact given details below..!');
        }
        //return response()->json($responce);
        echo json_encode($responce);
    }

    public function aboutus()
    {
        $aboutdetails = $this->aboutdetails;
        $experences = $this->experences;
        $educations = $this->website->educationList();
        return view('aboutus_page',compact('aboutdetails','experences','educations'));
    }

    public function services()
    {
        $aboutdetails = $this->aboutdetails;
        $services = $this->services;
        return view('services_page',compact('aboutdetails','services'));
    }

    public function portfolio()
    {
        $aboutdetails = $this->aboutdetails;
        $projects = $this->projects;
        return view('portfolio_page',compact('aboutdetails','projects'));
    }

    public function contactus()
    {
        $aboutdetails = $this->aboutdetails;
        return view('contactus_page',compact('aboutdetails'));
    }

    public function portfoliodetails(Request $request)
    {
        $aboutdetails = $this->aboutdetails;
        $projects = $this->projects;
        $projectdetails = $this->website->projectdetails($request);
        return view('portfoliodetails_page',compact('aboutdetails','projects','projectdetails'));
        
    }
}
