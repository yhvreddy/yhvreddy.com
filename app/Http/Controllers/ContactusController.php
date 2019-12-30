<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Session;
use App\ContactusModel;
class ContactusController extends Controller
{
    /*
    * Containing Global Data.
    * */
    public function __construct()
    {
        $this->middleware('auth');
        $this->userdata = Auth::user();
        $this->contactus = new ContactusModel;
    }
}
