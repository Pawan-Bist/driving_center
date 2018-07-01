@extends('adminlte::page')

@section('title', 'Add new booking')

@section('content_header')
    <h1>Add new booking</h1>
@stop

@section('content')
    {!!Form::open(['url'=>'admin/bookings','method'=>'post'])!!}
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
                        <option >Select the trainer:</option>
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
                    <input name="discount" type="text" class="form-control" value="0"/>
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
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bower/pikaday/css/pikaday.css')}}"/>
@stop
@section('js')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{asset('assets/bower/pikaday/pikaday.js')}}"></script>
    <script src="{{asset('assets/bower/pikaday/plugins/pikaday.jquery.js')}}"></script>
    <script>

    // activate datepickers for all elements with a class of `datepicker`
    $('.datepicker').pikaday({ firstDay: 0 });

    // chain a few methods for the first datepicker, jQuery style!
    $('.datepicker').eq(1).pikaday('hide').pikaday('gotoYear', current);

    </script>
@stop