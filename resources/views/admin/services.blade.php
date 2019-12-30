@extends('layouts.app')
@section('page_title','Services Details')
@section('content_box')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <form method="post" action="{{url('/home/saveServiceData')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h4>Add Services</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label>Service Name</label>
                            <input type="text" class="form-control" required="" name="serviceName" placeholder="Service Name">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Service Image</label>
                            <input type="file" class="form-control" name="serviceImage">
                        </div>
                        <div class="col-md-4 form-group">
                            <label>Service Icon</label>
                            <input type="text" class="form-control" name="serviceIcon" placeholder="Service Icon">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Service Content</label>
                            <textarea class="form-control" required="" row="6" name="serviceContent" placeholder="Type Service Content..."></textarea>
                        </div>
                    </div>    
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" type="submit">Save Services</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            
            <div class="card-header">
                <h4>Services List</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped datatable" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Service Name</th>
                            <th>Icon</th>
                            <th>SImage</th>
                            <th>Content</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $key => $service)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$service->service_name}}</td>
                                <td align="center">
                                    @if(!empty($service->service_icon))
                                        <i class="{{$service->service_icon}}" style="font-size: 28px;"></i>
                                    @else
                                        ---
                                    @endif
                                </td>
                                <td align="center">
                                    @if(!empty($service->service_image))
                                        <img src="{{url($service->service_image)}}" style="border-radius:50%;width:40px;height:40px">
                                    @else
                                        ---
                                    @endif
                                </td>
                                <td>{{$service->service_content}}</td>
                                <td>
                                    <a href="{{url('/home/service/'.$service->id.'/delete')}}" onclick="return confirm('You want to delete {{$service->service_name}} service details.?')"><i class="fa fa-trash"></i></a>
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
