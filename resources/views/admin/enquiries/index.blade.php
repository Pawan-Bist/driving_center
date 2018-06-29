@extends('adminlte::page')

@section('title', 'Enquiries')

@section('content_header')
    <h1>Submitted Enquiries</h1>
    <br/>
@stop

@section('content')
    <!-- <div class="pull-right">
            <a href="{{url('admin/enquiries/create')}}" class="btn btn-primary btn-xs" title="Add a new enquiry">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
    </div> -->
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Enquired On</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Contact No</th>
            <th>DOB</th>
            <th>Remarks</th>
            <th>Action</th>
        </tr>
    @foreach ($enquiries as $enquiry)
        <tr>
            <td>{{$enquiry->id}}</td>
            <td>{{$enquiry->course->name}}</td>
            <td>{{$enquiry->fullName()}}</td>
            <td>{{$enquiry->email}}</td>
            <td>{{$enquiry->address}}</td>
            <td>{{$enquiry->contact_no}}</td>
            <td>{{$enquiry->date_of_birth}}</td>
            <td>
                    <a href="{{url('#')}}" class="btn btn-primary btn-xs" title="View remarks">
                            <span class="glyphicon glyphicon-envelope"></span>
                    </a></td>
            <td>
                    <form method="post" action="{{url('admin/enquiries/'.$enquiry->id)}}">
                        <a href="{{url('admin/enquiries/'.$enquiry->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit A enquiry">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {{csrf_field()}}
                        
                        <!-- This input is for sending http request for deleting the record,
                         since the html form doesnt accept delete method -->

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