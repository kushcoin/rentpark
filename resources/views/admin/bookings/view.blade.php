@extends('layouts.admin')

@section('content')

	<div class="content-wrapper">

		 <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Booking Detail</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Booking Detail</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

        <a href="{{ route('admin.bookings.index') }}" class="btn btn-primary">Go Back</a>

		< <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
		            <div class="box-body">
		              <table class="table ">
		                <tr>
		                  	<th>Details</th>
		                  	<th>Booking Data</th>
		                </tr>
		             	<tr>
		             		<td>User Name</td>
		             		<td>

		             			@if($booking->user()->first()!=NULL)

						            <a href="{{ route('admin.users.view',$booking->user()->first()->id) }}">{{ $booking->user()->first()->name }}</a>
						        @else
						            No User Available
						        @endif	
						     </td>	
		             	</tr>

		             	<tr>
		             		<td>Provider Name</td>
		             		<td>
		             			@if($booking->provider()->first()!=NULL)

						            <a href="#">{{ $booking->provider()->first()->name }}</a>
						        @else
						            No Provider Available
						        @endif
		             		</td>
		             	</tr>

		             	{{-- <tr>
		             		<td>Provider Name</td>
		             		<td><a href="{{ route('admin.providers.view',$booking->provider()->first()->id) }}">{{ $booking->provider()->first()->name}}</a></td>
		             	</tr>	
 --}}
		             	<tr>
		             		<td>Host Name</td>
		             		<td>

		             			@if($booking->host()->first()!=NULL)

									<a href="{{ route('admin.hosts.view',$booking->host()->first()->id) }}">{{ $booking->host()->first()->host_name }}</a>										
								@else
									No Host Available
								@endif

		             		</td>
		             	</tr>	

		             	<tr>
		             		<td>Check-in Time</td>
		             		<td>{{ $booking->checkin }}</td>
		             	</tr>	

		             	<tr>
		             		<td>Check-out Time</td>
		             		<td>{{ $booking->checkout }}</td>
		             	</tr>	

		             	<tr>
		             		<td>Status</td>
		             		@switch($booking->status)

		             			@case(0)
		             				<td><div class="label label-primary">None</div></td>
		             			@break

		             			@case(1)
		             				<td><div class="label label-info">Booking Created</div></td>
		             			@break

		             			@case(2)
		             				<td><div class="label label-primary">Check in</div></td>
		             			@break

		             			@case(3)
		             				<td><div class="label label-primary">Check Out</div></td>
		             			@break

		             			@case(4)
		             				<td><div class="label label-success">Completed</div></td>
		             			@break

		             			@case(5)
		             				<td><div class="label label-danger">User Cancel</div></td>
		             			@break

		             			@case(6)
		             				<td><div class="label label-danger">Provider Cancel</div></td>
		             			@break

		             		@endswitch

		             		
		             	</tr>	

		             	<tr>
		             		<td>Review</td>
		             		<td><input type="text" name="review"></td>
		             	</tr>	

		              </table>
		        
		            </div>
	          </div>								
			</div>							
		</div>
	</div>
@endsection