@extends('layouts.app')
@section('page_title','Aboutus Details')
@section('content_box')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{url('/home/saveAboutusData')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Aboutus Details</h4>
                </div>
                <div class="card-body">
                    @if(count($aboutus) != 0)
                        <div class="row">
                            <input type="hidden" name="edit_id" value="{{$aboutus[0]->id}}">
                            <div class="col-md-4 form-group">
                                <label>First Name</label>
                                <input type="text" value="{{$aboutus[0]->first_name}}" class="form-control" required="" name="firstName" placeholder="First Name">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Middel Name</label>
                                <input type="text" value="{{$aboutus[0]->middel_name}}" class="form-control" required="" name="middelName" placeholder="Middel Name">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Last Name</label>
                                <input type="text" value="{{$aboutus[0]->last_name}}" class="form-control" required="" name="lastName" placeholder="Last Name">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Mobile Number</label>
                                <input type="tel" value="{{$aboutus[0]->mobile}}" maxlength="10" class="form-control" required="" name="mobile" placeholder="Enter Mobile Number">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Email id</label>
                                <input type="email" value="{{$aboutus[0]->email}}" class="form-control" required="" name="email" placeholder="Enter eMail id">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Profession</label>
                                <input type="text" value="{{$aboutus[0]->profession}}" class="form-control" required="" name="profession" placeholder="Enter Profession">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Upload Resume</label> 
                                @if(!empty($aboutus[0]->resume))
                                    <a href="{{url($aboutus[0]->resume)}}" target="_blank" class="pull-right">Uploaded Resume</a>
                                @endif
                                <input type="file" class="form-control" name="UplaodResume">
                                <input type="hidden" value="{{$aboutus[0]->resume}}" name="uploadedresume">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Logo Image</label>
                                @if(!empty($aboutus[0]->logo))
                                    <a href="{{url($aboutus[0]->logo)}}" target="_blank" class="pull-right">Uploaded Logo</a>
                                @endif
                                <input type="file" class="form-control" name="LogoImage">
                                <input type="hidden" value="{{$aboutus[0]->logo}}" name="uploadedlogo">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Banner Image</label>
                                @if(!empty($aboutus[0]->banner_img))
                                    <a href="{{url($aboutus[0]->banner_img)}}" target="_blank" class="pull-right">Uploaded Banner img</a>
                                @endif
                                <input type="file" class="form-control" name="BannerImage">
                                <input type="hidden" value="{{$aboutus[0]->banner_img}}" name="uploadedbannerimg">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>About Image</label>
                                @if(!empty($aboutus[0]->about_img))
                                    <a href="{{url($aboutus[0]->about_img)}}" target="_blank" class="pull-right">Uploaded Aboutus Img</a>
                                @endif
                                <input type="file" class="form-control" name="AboutImage">
                                <input type="hidden" value="{{$aboutus[0]->about_img}}" name="uploadedaboutimg">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Other Image</label>
                                @if(!empty($aboutus[0]->other_img))
                                    <a href="{{url($aboutus[0]->other_img)}}" target="_blank" class="pull-right">Uploaded Other Img</a>
                                @endif
                                <input type="file" class="form-control" name="OtherImage">
                                <input type="hidden" value="{{$aboutus[0]->other_img}}" name="uploadedotherfile">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Shot Content</label>
                                <textarea class="summernote form-control" required="" rows="6" name="shortContent" placeholder="Type About Short Content...">{{$aboutus[0]->short_description}}</textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>About More Content</label>
                                <textarea class="summernote form-control" name="Content" placeholder="Type About More Content...">{{$aboutus[0]->description}}</textarea>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>FaceBook</label>
                                <input type="url" class="form-control" value="{{$aboutus[0]->facebook}}" required="" name="facebook" placeholder="Enter facebook link">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Linkedin</label>
                                <input type="url" class="form-control" value="{{$aboutus[0]->linkedin}}" required="" name="linkedin" placeholder="Enter Linkedin link">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Twitter</label>
                                <input type="url" class="form-control" value="{{$aboutus[0]->twitter}}" required="" name="twitter" placeholder="Enter Twitter link">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Github</label>
                                <input type="url" class="form-control" value="{{$aboutus[0]->github}}" required="" name="github" placeholder="Enter Github link">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Instagram</label>
                                <input type="url" class="form-control" value="{{$aboutus[0]->instagram}}" required="" name="instagram" placeholder="Enter Linkedin link">
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-4 form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" required="" name="firstName" placeholder="First Name">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Middel Name</label>
                                <input type="text" class="form-control" required="" name="middelName" placeholder="Middel Name">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" required="" name="lastName" placeholder="Last Name">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Mobile Number</label>
                                <input type="tel" maxlength="10" class="form-control" required="" name="mobile" placeholder="Enter Mobile Number">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Email id</label>
                                <input type="email" class="form-control" required="" name="email" placeholder="Enter eMail id">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Profession</label>
                                <input type="text" class="form-control" required="" name="profession" placeholder="Enter Profession">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Upload Resume</label>
                                <input type="file" class="form-control" name="UplaodResume">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Logo Image</label>
                                <input type="file" class="form-control" name="LogoImage">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Banner Image</label>
                                <input type="file" class="form-control" name="BannerImage">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>About Image</label>
                                <input type="file" class="form-control" name="AboutImage">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Other Image</label>
                                <input type="file" class="form-control" name="OtherImage">
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Shot Content</label>
                                <textarea class="summernote form-control" required="" rows="6" name="shortContent" placeholder="Type About Short Content..."></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>About More Content</label>
                                <textarea class="summernote form-control" name="Content" placeholder="Type About More Content..."></textarea>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>FaceBook</label>
                                <input type="url" class="form-control" required="" name="facebook" placeholder="Enter facebook link">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Linkedin</label>
                                <input type="url" class="form-control" required="" name="linkedin" placeholder="Enter Linkedin link">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Twitter</label>
                                <input type="url" class="form-control" required="" name="twitter" placeholder="Enter Twitter link">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Github</label>
                                <input type="url" class="form-control" required="" name="github" placeholder="Enter Github link">
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Instagram</label>
                                <input type="url" class="form-control" required="" name="instagram" placeholder="Enter Linkedin link">
                            </div>
                        </div>
                    @endif        
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" type="submit">Save Aboutus</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
