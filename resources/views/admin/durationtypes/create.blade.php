@extends('adminlte::page')

@section('title','Add new duration type')

@section('content_header')
    <div>
        <h1>Add Duration Type</h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="/admin/durationtypes"><i class="fa fa-clock"></i>DurationTypes</a></li>
        <li class="active">Add</li>
    </ol>
@stop

@section('content')
    {!!Form::open(['url'=>'admin/durationtypes','method'=>'post'])!!}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"/>
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
                    <input type="text" name="code" class="form-control"/>
                    @if($errors->first('code'))
                        <div class="label label-danger">
                            {{$errors->first('code')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="submit" name="snc" class="btn btn-primary">Save and Continue</button>
        <a href="{{url('admin/durationtypes')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@stop