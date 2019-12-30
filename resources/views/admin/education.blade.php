@extends('layouts.app')
@section('page_title','Education Details')
@section('content_box')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{url('/home/educationsave')}}">
                @csrf
                <div class="card-header">
                    <h4>Add Education Qualification's</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>School / College Name</label>
                            <input type="text" class="form-control" required="" name="schoolCollegeName" placeholder="School / College Name">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Education Qualification</label>
                            <input type="text" class="form-control" required="" name="qualification" placeholder="Education Qualification">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>University Name </label>
                            <input type="text" class="form-control" required="" name="universityName" placeholder="University Name">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Passout</label>
                            <input type="text" class="form-control" name="passout" placeholder="Passout Year">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Percentage %</label>
                            <input type="text" class="form-control" name="percentage" placeholder="percentage">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Location">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Content</label>
                            <textarea class="form-control" name="Content" placeholder="Type Content..."></textarea>
                        </div>
                    </div>    
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" type="submit">Save Education Details</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            
            <div class="card-header">
                <h4>Education Qualification's List</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped datatable" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>School / College Name</th>
                            <th>Education</th>
                            <th>University</th>
                            <th>passout</th>
                            <th>Percent %</th>
                            <th>Content</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($education as $key => $edu)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$edu->institute_name}}</td>
                                <td>{{$edu->education}}</td>
                                <td>{{$edu->university}}</td>
                                <td>{{$edu->pass_out}}</td>
                                <td>{{$edu->percent_age}}</td>
                                <td>{{$edu->content}}</td>
                                <td>
                                    <a href="{{url('/home/education/'.$edu->id.'/delete')}}" onclick="return confirm('You want to delete {{$edu->education}} details.?')"><i class="fa fa-trash"></i></a>
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
