@extends('layouts.app')
@section('page_title','Project List')
@section('content_box')
<div class="row">

    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            
            <div class="card-header">
                <h4>Project's List</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped datatable" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th></th>
                            <th>Project Name</th>
                            <th>Duration</th>
                            <th>On Position</th>
                            <th>Started Date</th>
                            <th>Project Mode</th>
                            <th>Client Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $key => $project)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <img src="{{asset($project->project_cover_img)}}" style="border-radius:50%;width:30px;height:30px">
                                </td>
                                <td><a href="#">{{$project->project_name}}</a></td>
                                <td>{{$project->project_duration}}</td>
                                <td>
                                    <?php $type = DB::table('portfolio_formdata')->where('short_name',$project->project_type)->get(); ?>
                                    {{$type[0]->name}}
                                </td>
                                <td>{{date('d-m-Y',strtotime($project->start_date))}}</td>
                                <td>{{ucfirst($project->project_mode)}}</td>
                                <td>
                                    @if(!empty($project->client_name))
                                        {{ucwords($project->client_name)}}
                                    @else
                                        ---
                                    @endif
                                </td>
                                <td>
                                    <a href="#" onclick="return confirm('You want to edit project {{$project->project_name}} details.?')"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                    <a href="{{url('/home/project/'.$project->id.'/delete')}}" onclick="return confirm('You want to delete project {{$project->project_name}} details.?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
