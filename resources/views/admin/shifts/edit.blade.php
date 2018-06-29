@extends('adminlte::page')

@section('title', 'Edit a shift')

@section('content_header')
    <h1>Edit a shift</h1>
@stop

@section('content')
    {!!Form::open(['url'=>'admin/shifts/'.$shift->id,'method'=>'put'])!!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Shift Name</label>
                    <input type="text" name="name" value="{{$shift->name}}" class="form-control"/>
                    <!-- @if($errors->first('name'))
                        <div class="label label-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Shift Code</label>
                    <input type="text" name="code" value="{{$shift->code}}"  class="form-control"/>
                    <!-- @if($errors->first('code'))
                        <div class="label label-danger">
                            {{$errors->first('code')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Start Time</label>
                    <div class="input-group clockpicker pull-center">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="text" name="start" value="{{$shift->start}}"  class="form-control timepicker"/>
                        <!-- @if($errors->first('start'))
                            <div class="label label-danger">
                                {{$errors->first('start')}}
                            </div>
                        @endif -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>End Time</label>
                    <div class="input-group clockpicker pull-center">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <input type="text" name="end" value="{{$shift->end}}"  class="form-control"/>
                        <!-- @if($errors->first('end'))
                            <div class="label label-danger">
                                {{$errors->first('end')}}
                            </div>
                        @endif -->
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/shifts')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}
@endsection

<!-- Css and Js files inclusion -->

@section ('css')
<link rel="stylesheet" type="text/css" href="{{asset('clockpicker/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('clockpicker/dist/bootstrap-clockpicker.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('clockpicker/assets/css/github.min.css')}}">
@stop

@section('js')
<script type="text/javascript" src="{{asset('clockpicker/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('clockpicker/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('clockpicker/dist/bootstrap-clockpicker.min.js')}}"></script>
<script type="text/javascript">

$(document).ready(function(){

    $('.clockpicker').clockpicker()
        .find('input').change(function(){
            console.log(this.value);
        });
    var input = $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'right',
        autoclose: true,
        'default': 'now'
    });

    $('.clockpicker-with-callbacks').clockpicker({
            donetext: 'Done',
            init: function() { 
                console.log("colorpicker initiated");
            },
            beforeShow: function() {
                console.log("before show");
            },
            afterShow: function() {
                console.log("after show");
            },
            beforeHide: function() {
                console.log("before hide");
            },
            afterHide: function() {
                console.log("after hide");
            },
            beforeHourSelect: function() {
                console.log("before hour selected");
            },
            afterHourSelect: function() {
                console.log("after hour selected");
            },
            beforeDone: function() {
                console.log("before done");
            },
            afterDone: function() {
                console.log("after done");
            }
        })
        .find('input').change(function(){
            console.log(this.value);
        });

    // Manually toggle to the minutes view
    $('#check-minutes').click(function(e){
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show')
                .clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
    });
</script>
<script type="text/javascript" src="assets/js/highlight.min.js"></script>
<script type="text/javascript">
// hljs.configure({tabReplace: '    '});
// hljs.initHighlightingOnLoad();
$('.clockpicker').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now',
});
</script>
@stop