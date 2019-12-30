@extends('layouts.app')
@section('page_title','Experence details')
@section('content_box')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{url('/home/experencesave')}}">
                @csrf
                <div class="card-header">
                    <h4>Add Job Experence's</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Company Name</label>
                            <input type="text" class="form-control" required="" name="companyName" placeholder="Company Name">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Degination</label>
                            <input type="text" class="form-control" required="" name="degination" placeholder="Deginantion">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Experence </label>
                            <input type="text" class="form-control" required="" name="experence" placeholder="Job Experence">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Salary <small>per/y</small></label>
                            <input type="text" class="form-control" required="" name="salary" placeholder="Salary per/year">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Joining Date</label>
                            <input type="text" class="datepicker form-control" required="" name="joindate" placeholder="Joining Date Ex DD-MM-YYYY">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Regination Date</label>
                            <input type="text" class="datepicker form-control" name="reginationdate" placeholder="Regination Date Ex DD-MM-YYYY">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" required="" name="location" placeholder="Job Location">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="Content" placeholder="Type Content..."></textarea>
                        </div>
                    </div>    
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" type="submit">Save Experence Details</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            
            <div class="card-header">
                <h4>Job Experence's List</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped datatable" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Company Name</th>
                            <th>Deginantion</th>
                            <th>Experence</th>
                            <th>Salary <small>per/year</small></th>
                            <th>Join Date</th>
                            <th>Reg Date</th>
                            <th>Location</th>
                            <th>Content</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($exprences as $key => $edu)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$edu->company_name}}</td>
                                <td>{{$edu->degination}}</td>
                                <td>{{str_replace('-',' ',$edu->experience)}}</td>
                                <td>{{$edu->salary}}</td>
                                <td>{{date('d-m-Y',strtotime($edu->join_date))}}</td>
                                <td>
                                    @if(!empty($edu->end_date)) 
                                        {{date('d-m-Y',strtotime($edu->end_date))}} 
                                    @else 
                                        Still Working 
                                    @endif
                                </td>
                                <td>{{$edu->location}}</td>
                                <td>{{$edu->content}}</td>
                                <td>
                                    <a href="{{url('/home/experence/'.$edu->id.'/delete')}}" onclick="return confirm('You want to delete {{$edu->company_name}} details.?')"><i class="fa fa-trash"></i></a>
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
