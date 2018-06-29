@extends('adminlte::page')

@section('title', 'Add new trainer')

@section('content_header')
    <h1>Add New Trainer</h1>
@stop

@section('content')
    {!!Form::open(['url'=>'admin/trainers','method'=>'post'])!!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control"/>
                    <!-- @if($errors->first('first_name'))
                        <div class="label label-danger">
                            {{$errors->first('first_name')}}
                        </div>
                    @endif -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control"/>
                    <!-- @if($errors->first('last_name'))
                        <div class="label label-danger">
                            {{$errors->first('last_name')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control"/>
                    <!-- @if($errors->first('email'))
                        <div class="label label-danger">
                            {{$errors->first('email')}}
                        </div>
                    @endif -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control"/>
                    <!-- @if($errors->first('address'))
                        <div class="label label-danger">
                            {{$errors->first('address')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Contact No</label>
                    <input type="text" name="contact_no" class="form-control"/>
                    <!-- @if($errors->first('contact_no'))
                        <div class="label label-danger">
                            {{$errors->first('contact_no')}}
                        </div>
                    @endif -->
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" >
                        <option value="1">Select 0 or 1:</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    <!-- @if($errors->first('status'))
                        <div class="label label-danger">
                            {{$errors->first('status')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/trainers')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection