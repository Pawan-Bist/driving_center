@extends('adminlte::page')

@section('title', 'Our Trainers')

@section('content_header')
    <h1>All the trainers</h1>
    </br>
@stop

@section('content')
    <!-- <div class="pull-right">
            <a href="{{url('admin/trainers/create')}}" class="btn btn-primary btn-xs" title="Add a new Trainer">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
    </div> -->
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact No</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    @foreach ($trainers as $trainer)
        <tr>
            <td>{{$trainer->id}}</td>
            <td>{{$trainer->first_name}} {{$trainer->last_name}}</td>
            <td>{{$trainer->email}}</td>
            <td>{{$trainer->address}}</td>
            <td>{{$trainer->contact_no}}</td>
            <td>
                @if($trainer->status)
                        <label class="label label-success">Active</label>
                    @else
                        <label class="label label-danger">Inactive</label>
                @endif
            </td>
            <td>
                    <form method="post" action="{{url('admin/trainers/'.$trainer->id)}}">
                        <a href="{{url('admin/trainers/'.$trainer->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit A trainer">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                        <!-- This input is for deleting since the html form doesnt accept delete method -->
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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@stop

@endsection