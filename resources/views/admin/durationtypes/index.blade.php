@extends('adminlte::page')

@section('title', 'Duration Types')

@section('content_header')
    <div>
        <h1>Duration Types</h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"><i class="fa fa-clock"></i> DurationTypes</li>
    </ol>
@stop

@section('content')
    <!-- <div class="pull-right">
            <a href="{{url('admin/durationtypes/create')}}" class="btn btn-primary btn-xs" title="Add a new duration_type">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
    </div> -->
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Action</th>
        </tr>
    @foreach ($durationtypes as $durationtype)
        <tr>
            <td>{{$durationtype->id}}</td>
            <td>{{$durationtype->name}}</td>
            <td>{{$durationtype->code}}</td>
            <td>
                    <form method="post" action="{{url('admin/durationtypes/'.$durationtype->id)}}">
                        <a href="{{url('admin/durationtypes/'.$durationtype->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit A duration_type">
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
@stop