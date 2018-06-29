@extends('adminlte::page')

@section('title', 'Edit Course Information')

@section('content_header')
    <h1>Edit A Course</h1>
@stop

@section('content')
    {!!Form::open(['url'=>'admin/courses/'.$course->id,'method'=>'put'])!!}
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" name="name" value="{{$course->name}}" class="form-control"/>
                        <!-- @if($errors->first('name'))
                            <div class="label label-danger">
                                {{$errors->first('name')}}
                            </div>
                        @endif -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Fee</label>
                        <input type="text" name="fee" value="{{$course->fee}}" class="form-control" pattern="[0-9]+"/>
                        <!-- @if($errors->first('fee'))
                            <div class="label label-danger">
                                {{$errors->first('fee')}}
                            </div>
                        @endif -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3" value="{{$course->description}}" placeholder="{{$course->description}}leave as it is for the previous description" ></textarea>
                        <!-- @if($errors->first('description'))
                            <div class="label label-danger">
                                {{$errors->first('description')}}
                            </div>
                        @endif -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Duration</label>
                        <input type="textarea" name="duration"  value="{{$course->duration}}" class="form-control"/>
                        <!-- @if($errors->first('duration'))
                            <div class="label label-danger">
                                {{$errors->first('duration')}}
                            </div>
                        @endif -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Duration Type</label>
                        <select name="duration_type_id" class="form-control">
                            <option value="{{$course->durationtype->id}}">{{$course->durationtype->type}}</option>
                            @foreach($duration_types as $duration_type)
                                <option value="{{$duration_type->id}}">{{$duration_type->type}}</option>
                            @endforeach
                        </select>
                        <!-- @if($errors->first('duration_type_id'))
                            <div class="label label-danger">
                                {{$errors->first('duration_type_id')}}
                            </div>
                        @endif -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Availability</label>
                        <select name="availability" class="form-control" >
                            <option value="{{$course->availability}}">{{$course->availability}}</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                        @if($errors->first('availability'))
                            <div class="label label-danger">
                                {{$errors->first('availability')}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <!-- <input type="hidden" name="id" value="{{$course->id}}"/> -->
            <a href="{{url('admin/courses')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection