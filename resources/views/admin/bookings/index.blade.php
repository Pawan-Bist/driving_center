@extends('adminlte::page')

@section('title', 'Bookings')

@section('content_header')
    <h1>Total Bookings</h1>
    <br/>
@stop

@section('content')
    <!-- <div class="pull-right">
            <a href="{{url('admin/bookings/create')}}" class="btn btn-primary btn-xs" title="Book a new course">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
    </div> -->
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Enquiry ID</th>
            <th>Course</th>
            <th>Trainer</th>
            <th>Shift</th>
            <th>Book Date</th>
            <th>Fee</th>
            <th>Discount Given</th>
            <th>Advance Payment</th>
            <th>Action</th> 
        </tr>
    @foreach ($bookings as $booking)
        <tr>
            <td>{{$booking->id}}</td>
            <td>{{$booking->enquiry->first_name}}</td>
            <td>{{$booking->enquiry->course->name}}</td>
            <td>{{$booking->trainer->fullName()}}</td>
            <td>{{$booking->shift->code}}</td>
            <td>{{$booking->book_date}}</td>
            <td>{{$booking->enquiry->course->fee}}</td>
            <td>{{$booking->discount}}</td>
            <td>{{$booking->advance}}</td>
            <td>
                    <form method="post" action="{{url('admin/bookings/'.$booking->id)}}">
                        <a href="{{url('admin/bookings/'.$booking->id.'/edit')}}" class="btn btn-success btn-xs" title="Edit A booking">
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
<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@stop

@endsection