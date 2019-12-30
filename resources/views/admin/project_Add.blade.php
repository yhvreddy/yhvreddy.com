@extends('layouts.app')
@section('page_title','Add Project Details')
@section('content_box')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{url('/home/saveprojectdetails')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Add Project Details</h4>
                </div>
                <div class="card-body">
                    
                    <div class="row">

                        <div class="col-md-4 form-group">
                            <label>Project Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required="" name="projectName" placeholder="Project Name">
                        </div>

                        <div class="col-md-4 form-group">
                            <label>Project Duration <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" required="" name="duration" placeholder="Project Duration">
                        </div>

                        <div class="col-md-4 form-group">
                            <label>Project Type <span class="text-danger">*</span></label>
                            <select name="project_type" class="select2 form-control" required="">
                                <option value="">Select Project Type</option>
                                @foreach($types as $type)
                                    <option value="{{$type->short_name}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-md-4 form-group">
                            <label>Project Mode <span class="text-danger">*</span></label>
                            <select name="project_mode" class="select2 form-control" required="">
                                <option value="">Select Project Mode</option>
                                <option value="freelancer">Freelancer</option>
                                <option value="company">Under Company</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 form-group">
                            <label>Client Name</label>
                            <input type="text" class="form-control" name="clientName" placeholder="Enter Client Name">
                        </div>

                        <div class="col-md-4 form-group">
                            <label>Company Name </label>
                            <select name="company_name" class="select2 form-control">
                                <option value="">Select Company Name</option>
                                @foreach($companys as $company)
                                    <option value="{{$company->id}}">{{$company->company_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-md-4 form-group">
                            <label>Project Url </label>
                            <input type="url" class="form-control" name="project_url" placeholder="Enter url Link">
                        </div>

                        <div class="col-md-4 form-group">
                            <label>Stating Date <span class="text-danger">*</span></label>
                            <input type="text" class="datepicker form-control" required="" name="startingdate" placeholder="Stating Date Ex DD-MM-YYYY">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Ending Date</label>
                            <input type="text" class="datepicker form-control" name="endingdate" placeholder="Ending Date Ex DD-MM-YYYY">
                        </div>

                        <div class="col-md-8 col-sm-12 form-group">
                            <label>Skills <span class="text-danger">*</span></label>
                            <select class="form-control select2" multiple="" required="" name="skills[]">
                                @foreach($skills as $skill)
                                    <option value="{{$skill->id}}">{{ucfirst($skill->name)}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4 form-group">
                            <label>Upload CoverImage <span class="text-danger">*</span></label>
                            <input type="file" required="" class="form-control" name="UplaodCoureImage">
                        </div>

                        <div class="col-md-12 form-group">
                            <label>Project Short Content</label>
                            <textarea class="form-control" name="ShortContent" placeholder="Type Project Content..."></textarea>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <label>Project More Details</label>
                            <textarea class="summernote form-control" name="Content" placeholder="Type About More Content..."></textarea>
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Github Rep Link</label>
                            <input type="url" class="form-control" value="https://github.com/yhvreddy/" name="github" placeholder="Enter Github link">
                        </div>
                    </div>
                        
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" type="submit">Save Project Details</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
