@extends('adminlte::page')

@section('title', 'Add new enquiry')

@section('content_header')
    <h1>Add A New Enquiry</h1>
@stop

@section('content')
    {!!Form::open(['url'=>'admin/enquiries/'.$enquiry->id,'method'=>'put'])!!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" value="{{$enquiry->first_name}}" class="form-control"/>
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
                    <input type="text" name="last_name" value="{{$enquiry->last_name}}"  class="form-control"/>
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
                    <input type="email" name="email" value="{{$enquiry->email}}"  class="form-control"/>
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
                    <input type="text" name="address"  value="{{$enquiry->address}}" class="form-control"/>
                    <!-- @if($errors->first('address'))
                        <div class="label label-danger">
                            {{$errors->first('address')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <label>Enquiry for</label>
                        <select name="course_id" class="form-control" >
                            <option value="{{$enquiry->course->id}}">{{$enquiry->course->name}}</option>
                            @foreach ($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                            @endforeach
                        </select>
                        <!-- @if($errors->first('status'))
                            <div class="label label-danger">
                                {{$errors->first('status')}}
                            </div>
                        @endif -->
                    </div>
                </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Contact No</label>
                    <input type="text" name="contact_no"  value="{{$enquiry->contact_no}}" class="form-control"/>
                    <!-- @if($errors->first('contact_no'))
                        <div class="label label-danger">
                            {{$errors->first('contact_no')}}
                        </div>
                    @endif -->
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>DOB</label>
                    <input type="text" name="date_of_birth"  value="{{$enquiry->date_of_birth}}" class="form-control"/>
                    <!-- @if($errors->first('contact_no'))
                        <div class="label label-danger">
                            {{$errors->first('contact_no')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Remarks</label>
                    <textarea name="remarks" class="form-control" rows="3"   value="{{$enquiry->remarks}}" ></textarea>
                    <!-- @if($errors->first('remarks'))
                        <div class="label label-danger">
                            {{$errors->first('remarks')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/enquiries')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection