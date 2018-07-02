@extends('adminlte::page')

@section('title', 'index')

@section('content_header')
    <h1>Driving Courses</h1>
    <br/>
@stop

@section('content')
    <!-- <div class="pull-right">
            <a href="{{url('admin/courses/create')}}" class="btn btn-primary btn-xs" title="Add a new Course">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
    </div> -->
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Fee (NRs.)</th>
            <th>Duration</th>
            <th>Availability</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    @foreach ($courses as $course)
        <tr>
            <td >{{$course->id}}</td>
            <td>{{$course->name}}</td>
            <td>{{$course->fee}}</td>
            <td >{{$course->duration}} ({{$course->durationtype->code}})</td>
            <!-- <td>{{$course->duration}} ({{$course->Durationtype->code}})</td>
            <td>{{$course->duration}} ({{$course->DurationType->code}})</td>
            <td>{{$course->duration}} ({{$course->durationType->code}})</td> -->
            <td>
                @if($course->availability)
                        <label class="label label-success">Available</label>
                    @else
                        <label class="label label-danger">NA</label>
                @endif
            </td>
            <td>    <a href="{{url('#')}}" class="btn btn-primary btn-xs" title="Add a new Course">
                            <span class="glyphicon glyphicon-envelope"></span>
                    </a>
            </td>
            <td>
                    <form method="post" action="{{url('admin/courses/'.$course->id)}}">
                        <a href="{{url('admin/courses/'.$course->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit A Course">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE"/>                            
                        <button type="submit" value="Delete" onclick="return confirm('Delete for sure ?? ')" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </form>
                </td>
        </tr>
    @endforeach
    </table>

    
@section('css')
<!-- Bootstrap CSS -->
<link href="{{asset('assets/bower/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/bower/datatables/media/css/jquery.dataTables.min.css')}}">

@stop

@section('js')
<script src="{{asset('assets/bower/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/bower/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower/bootstrap/dist/js/bootstrap.min.js')}}"></script>
@stop

@endsection