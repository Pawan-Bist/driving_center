@extends('adminlte::page')

@section('title', 'Total shiifts on a day')

@section('content_header')
    <h1>Add new duration type</h1>
    <br/>
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
    @foreach ($duration_types as $duration_type)
        <tr>
            <td>{{$duration_type->id}}</td>
            <td>{{$duration_type->name}}</td>
            <td>{{$duration_type->code}}</td>
            <td>{{$duration_type->start}}</td>
            <td>{{$duration_type->end}}</td>
            <td>
                    <form method="post" action="{{url('admin/duration_types/'.$duration_type->id)}}">
                        <a href="{{url('admin/duration_types/'.$duration_type->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit A duration_type">
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