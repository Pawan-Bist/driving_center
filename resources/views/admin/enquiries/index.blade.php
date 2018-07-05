@extends('adminlte::page')

@section('title', 'Enquiries')

@section('content_header')
    <div>
        <h1>Enquiries</h1>
    </div>
    <ol class="breadcrumb">
        <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"><i class="fa fa-eye"></i> Enquiries</li>
    </ol>
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
            <td>({{$enquiry->course->vehicle->name}}) {{$enquiry->course->name}}</td>
            <td>{{$enquiry->fullName()}}</td>
            <td>{{$enquiry->email}}</td>
            <td>{{$enquiry->address}}</td>
            <td>{{$enquiry->contact_no}}</td>
            <td>{{$enquiry->date_of_birth}}</td>
        <td>    <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#remarks">
                View
                </button>
                <!-- Modal for description -->
                <div class="modal fade" id="remarks" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="title">Remarks</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{$enquiry->remarks}}
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
<link href="{{asset('assets/bower/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/bower/datatables/media/css/jquery.dataTables.min.css')}}">
@stop

@section('js')
<script src="{{asset('assets/bower/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/bower/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/bower/bootstrap/dist/js/bootstrap.min.js')}}"></script>
@stop


@endsection