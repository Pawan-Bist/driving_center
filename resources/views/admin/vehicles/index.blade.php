@extends('adminlte::page')

@section('title', 'Total vehicles')

@section('content_header')
    <div>
        <h1>Vehicles</h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"><i class="fa fa-text-car"></i> Vehicles</li>
    </ol>
@stop

@section('content')
    <!-- <div class="pull-right">
            <a href="{{url('admin/vehicles/create')}}" class="btn btn-primary btn-xs" title="Add a new vehicle">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
    </div> -->
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
    @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{$vehicle->id}}</td>
            <td>{{$vehicle->name}}</td>
            <td>{{$vehicle->created_at}}</td>
            <td>
                    <form method="post" action="{{url('admin/vehicles/'.$vehicle->id)}}">
                        <a href="{{url('admin/vehicles/'.$vehicle->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit A vehicle">
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
<link href="{{asset('assets/bower/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
@stop


@endsection