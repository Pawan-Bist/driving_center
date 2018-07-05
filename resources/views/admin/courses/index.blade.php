@extends('adminlte::page')

@section('title', 'Courses')

@section('content_header')
    <div>
        <h1 class="text-center">Driving Courses</h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"><i class="fa fa-copyright"></i> Courses</li>
    </ol>

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
    @foreach ($courses as $description=>$course)
        <tr>
            <td >{{$course->id}}</td>
            <td>({{$course->vehicle->name}}) {{$course->name}}</td>
            <td>{{$course->fee}}</td>
            <td >{{$course->duration}} ({{$course->durationtype->code}})</td>
            <!-- <td>{{$course->duration}} ({{$course->Durationtype->code}})</td>
            <td>{{$course->duration}} ({{$course->DurationType->code}})</td>
            <td>{{$course->duration}} ({{$course->durationType->code}})</td> 
            -->
            <td>
                @if($course->availability)
                        <label class="label label-success">Available</label>
                    @else
                        <label class="label label-danger">NA</label>
                @endif
            </td>
            <td>    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#description">
                    View
                    </button>
                    <!-- Modal for description -->
                    <div class="modal fade" id="description" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="title">Description</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{$description}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>

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

    
@stop

    
@section('css')
<!-- Bootstrap CSS -->
<!-- <link href="{{asset('assets/bower/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets/bower/datatables/media/css/jquery.dataTables.min.css')}}">

@stop

@section('js')
<script src="{{asset('assets/bower/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/bower/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<!-- <script src="{{asset('assets/bower/bootstrap/dist/js/bootstrap.min.js')}}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
@stop