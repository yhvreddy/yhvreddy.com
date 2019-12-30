@extends('layouts.app')
@section('page_title','Dashboard Details')
@section('content_box')
<div class="row">
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-bg">
            <div class="p-t-20 d-flex justify-content-between">
                <div class="col">
                <h6 class="mb-0">Projects</h6>
                <?php $projects = DB::table('portfolio_projects')->where('status',1)->get(); ?>
                <span class="font-weight-bold mb-0 font-20">{{count($projects)}}</span>
                </div>
                <i class="fas fa-address-card card-icon col-orange font-30 p-r-30"></i>
            </div>
            <canvas id="cardChart1" height="80"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-bg">
            <div class="p-t-20 d-flex justify-content-between">
                <div class="col">
                <h6 class="mb-0">Clients</h6>
                <?php $clients = DB::table('portfolio_clients')->where('status',1)->get(); ?>
                <span class="font-weight-bold mb-0 font-20">{{count($clients)}}</span>
                </div>
                <i class="fas fa-diagnoses card-icon col-green font-30 p-r-30"></i>
            </div>
            <canvas id="cardChart2" height="80"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-bg">
            <div class="p-t-20 d-flex justify-content-between">
                <div class="col">
                <h6 class="mb-0">Experence</h6>
                <?php 
                    $experence = DB::table('portfolio_experiences')->where('status',1)->get();
                    if(count($experence) != 0){
                        foreach($experence as $val){
                            @$exp = explode('-',$val->experience);
                            // if($exp[1] == 'years' || $exp[1] == 'year'){
                            //     $add = $exp[0];
                            // }else{

                            // }
                            // @$experences += $exp[0];
                        }
                    }else{
                        $experences = 0;
                    }
                ?>
                <span class="font-weight-bold mb-0 font-20">{{'2.5'.' Years'}}</span>
                </div>
                <i class="fas fa-chart-bar card-icon col-indigo font-30 p-r-30"></i>
            </div>
            <canvas id="cardChart3" height="80"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-bg">
            <div class="p-t-20 d-flex justify-content-between">
                <div class="col">
                <h6 class="mb-0">Skills</h6>
                <?php $skills = DB::table('portfolio_skills')->where('status',1)->get(); ?>
                <span class="font-weight-bold mb-0 font-20">{{count($skills)}}</span>
                </div>
                <i class="fas fa-hand-holding-usd card-icon col-cyan font-30 p-r-30"></i>
            </div>
            <canvas id="cardChart4" height="80"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
