@extends('adminlte::page')

@section('title', 'Edit a booking')

@section('content_header')
    <h1>Edit a booking</h1>
@stop

@section('content')
    {!!Form::open(['url'=>'admin/bookings/'.$booking->id,'method'=>'put'])!!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Enquirer</label>
                    <select name="enquiry_id" class="form-control">
                        <option >Select the enquirer:</option>
                        @foreach ($enquirers as $enquirer)
                        <option value="{{$enquirer->id}}">{{$enquirer->fullName()}} for {{$enquirer->course->name}}</option>
                        @endforeach
                    </select>
                    <!-- @if($errors->first('course_id'))
                        <div class="label label-danger">
                            {{$errors->first('course_id')}}
                        </div>
                    @endif -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Trainer</label>
                    <select name="trainer_id" class="form-control">
                        <option value="{{$booking->trainer->id}}">{{$booking->trainer->fullName()}}</option>
                        @foreach ($trainers as $trainer)
                        <option value="{{$trainer->id}}">{{$trainer->fullName()}}</option>
                        @endforeach
                    </select>
                    <!-- @if($errors->first('trainer_id'))
                        <div class="label label-danger">
                            {{$errors->first('trainer_id')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Shift</label>
                    <select name="shift_id" class="form-control">
                        <option >Select the shift:</option>
                        @foreach ($shifts as $shift)
                        <option value="{{$shift->id}}">{{$shift->name}} from {{$shift->start}} to {{$shift->end}}</option>
                        @endforeach
                    </select>
                    <!-- @if($errors->first('course_id'))
                        <div class="label label-danger">
                            {{$errors->first('course_id')}}
                        </div>
                    @endif -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Book Date</label>
                    <div class="input-group ">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input name="book_date" type="text" class="form-control datepicker pika-single"/>
                    </div>
                    <!-- @if($errors->first('book_id'))
                        <div class="label label-danger">
                            {{$errors->first('book_id')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Discount</label>
                    <input name="discount" type="text" class="form-control"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Advance received</label>
                    <input name="advance" type="text" class="form-control" value="0"/>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/bookings')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection