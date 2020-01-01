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

    public function indexWelcome()
    {
        return view('newyearwishs');
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
        $logdata = $this->website->usersLogsave($this->usersLogs());
        //dd($logdata);
        if(date('Y') >= 2020){
            $logdata = $this->website->usersLogsave($this->usersLogs());
            return view('home_page',compact('aboutdetails','projects','experences','services','educations','projectypes','testimonials','skills'));
        }else{
            return view('lanching');
        }
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


    public function usersLogs()
    {
        # portfolio_logs
        $accessingdevice = $_SERVER['HTTP_USER_AGENT'];
        $logindetails	=	array(
            'system_info'	=>	serialize($this->systemInfo()),
            'browser_info'	=>	$this->browser(),
            'device_info'	=>	$accessingdevice,
            'ip_address'	=>	$this->getRealIpAddr()
        );
        return $logindetails;
    }

    function getRealIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
        $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function systemInfo()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $os_platform    = "Unknown OS Platform";
        $os_array       = array(
            '/windows phone 8/i'    =>  'Windows Phone 8',
            '/windows phone os 7/i' =>  'Windows Phone 7',
            '/windows nt 10/i'      =>  'Windows 10',
            '/windows nt 6.3/i'     =>  'Windows 8.1',
            '/windows nt 6.2/i'     =>  'Windows 8',
            '/windows nt 6.1/i'     =>  'Windows 7',
            '/windows nt 6.0/i'     =>  'Windows Vista',
            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
            '/windows nt 5.1/i'     =>  'Windows XP',
            '/windows xp/i'         =>  'Windows XP',
            '/windows nt 5.0/i'     =>  'Windows 2000',
            '/windows me/i'         =>  'Windows ME',
            '/win98/i'              =>  'Windows 98',
            '/win95/i'              =>  'Windows 95',
            '/win16/i'              =>  'Windows 3.11',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/mac_powerpc/i'        =>  'Mac OS 9',
            '/linux/i'              =>  'Linux',
            '/ubuntu/i'             =>  'Ubuntu',
            '/iphone/i'             =>  'iPhone',
            '/ipod/i'               =>  'iPod',
            '/ipad/i'               =>  'iPad',
            '/android/i'            =>  'Android',
            '/blackberry/i'         =>  'BlackBerry',
            '/webos/i'              =>  'Mobile'
        );
        $found = false;
        //$addr = new RemoteAddress;
        $device = '';
        foreach ($os_array as $regex => $value)
        {
            if($found)
                break;
            else if (preg_match($regex, $user_agent))
            {
                $os_platform    =   $value;
                $device = !preg_match('/(windows|mac|linux|ubuntu)/i',$os_platform)
                    ?'MOBILE':(preg_match('/phone/i', $os_platform)?'MOBILE':'SYSTEM');
            }
        }
        $device = !$device? 'system ': $device;
        return array('os'=>$os_platform,'device'=>$device);
    }

    public function browser()
	{
		error_reporting(0);
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		$browser        =   "Unknown Browser";
		$browser_array  = array('/msie/i'       =>  'Internet Explorer',
			'/firefox/i'    =>  'Firefox',
			'/safari/i'     =>  'Safari',
			'/chrome/i'     =>  'Chrome',
			'/opera/i'      =>  'Opera',
			'/netscape/i'   =>  'Netscape',
			'/maxthon/i'    =>  'Maxthon',
			'/konqueror/i'  =>  'Konqueror',
			'/mobile/i'     =>  'Handheld Browser');

		foreach ($browser_array as $regex => $value)
		{
			if($found)
				break;
			else if (preg_match($regex, $user_agent,$result))
			{
				$browser    =   $value;
			}
		}
		return $browser;
	}
}
