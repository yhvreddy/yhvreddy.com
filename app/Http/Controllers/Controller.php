<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function success($message,$redirect)
    {
        session()->flash('success',$message);
        return redirect($redirect);
    }

    public function failed($message,$redirect)
    {
        session()->flash('failed',$message);
        return redirect($redirect);
    }

}
