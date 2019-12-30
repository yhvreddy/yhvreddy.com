@extends('layouts.app')
@section('page_title','Skills Details')
@section('content_box')
<div class="row">
    <div class="col-12 col-md-4 col-lg-4">
        <div class="card">
            <form method="post" action="{{url('/home/saveSkills')}}">
                @csrf
                <div class="card-header">
                    <h4>Add Skills</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Skill Name</label>
                        <input type="text" class="form-control" required="" name="skillName" placeholder="Add Skill Ex: PHP, MYSQL, ETC..">
                    </div>
                    <div class="form-group">
                        <label>Experence</label>
                        <input type="text" class="form-control" required="" name="experence" placeholder="Experence Ex: 1-M, 5-Y">
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                        <input type="tel" class="form-control" required="" min="1" maxlength="5" name="rating" placeholder="Rating Ex: 1-5">
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary" type="submit">Save Skills</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-12 col-md-8 col-lg-8">
        <div class="card">
            
            <div class="card-header">
                <h4>Skills List</h4>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped datatable" id="table-1">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Skill Name</th>
                            <th>Experence</th>
                            <th>Rating</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skills as $key => $skill)
                            <tr>
                                <td align="center">{{$key+1}}</td>
                                <td>{{$skill->name}}</td>
                                <td>
                                    <?php $exp = explode('-',$skill->experience); ?>
                                    {{ $exp['0'] }}
                                    {{ $exp['1'] }}
                                </td>
                                <td>{{$skill->rating}}</td>
                                <td>
                                    <a href="{{url('/home/skills/'.$skill->id.'/delete')}}" onclick="return confirm('You want to delete {{$skill->name}} details.?')"><i class="fa fa-trash"></i></a>
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
