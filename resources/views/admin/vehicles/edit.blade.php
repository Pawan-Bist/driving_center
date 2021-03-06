@extends('adminlte::page')

@section('title', 'Edit vehicle')

@section('content_header')
    <div>
        <h1>Edit Vehicle</h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="/admin/vehicles"><i class="fa fa-text-car"></i> Vehicles</a></li>
        <li class="active">Edit</li>
    </ol>
@stop

@section('content')
    {!!Form::open(['url'=>'admin/vehicles'.$vehicle->id,'method'=>'put'])!!}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Vehicle name</label>
                    <input type="text" name="name" class="form-control" value="$vehicle->name"/>
                    <!-- @if($errors->first('name'))
                        <div class="label label-danger">
                            {{$errors->first('name')}}
                        </div>
                    @endif -->
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{url('admin/vehicles')}}" class="btn btn-danger">Back</a>
    {!!Form::close()!!}

@endsection

<!-- Css and Js files inclusion -->

@section ('css')
<link href="{{asset('assets/bower/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
@stop

