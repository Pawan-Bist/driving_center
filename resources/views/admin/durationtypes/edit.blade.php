@extends('adminlte::page')

@section('title','Add new duration type')

@section('content_header')
    <div>
        <h1>Edit Duration Type</h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="/admin/durationtypes"><i class="fa fa-clock"></i>DurationTypes</a></li>
        <li class="active">Edit</li>
    </ol>
@stop

@section('content')
    {!!Form::open(['url'=>'admin/durationtypes/'.$durationtype->id,'method'=>'put'])!!}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$durationtype->name}}" class="form-control"/>
                    @if($errors->first('name'))
                        <div class="label label-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Code</label>
                    <input type="text" name="code" value="{{$durationtype->code}}" class="form-control"/>
                    @if($errors->first('code'))
                        <div class="label label-danger">
                            {{$errors->first('code')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/durationtypes')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@stop