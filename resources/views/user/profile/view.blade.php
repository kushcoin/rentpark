@extends('layouts.provider')

@section('content')

	<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="row">
            <div class="col-md-5">
              <h1 class="h3 mb-2 text-gray-800">user Profile</h1>
                <p class="mb-4">Your Profile information can available:</p>
            </div>
            <div class="col-md-7">
              <a href="{{ route('profile.view') }}"  class="btn btn-primary float-right hidden-sm-down">Go Back</a>
            </div>
          </div>  
         

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
            </div>
            <div class="card-body">
              <table class="table table-borderless">
                    <tr>
                        <th>Details</th>
                        <th>User Data</th>
                    </tr>                                                                                         
                  <tr>
                    <td>Name</td>
                    <td>{{ $user->name }}</td> 
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td>{{ $user->email }}</td> 
                  </tr> 

                  <tr>
                    <td>Description</td>
                    <td>{{ $user->description }}</td>
                  </tr> 

                  <tr>
                    <td>Mobile</td>
                    <td>{{ $user->mobile }}</td>
                  </tr> 

                  <tr>
                    <td>Picture</td>
                    <td><img src="{{ $user->picture }}" style="width: 200px;height: 200px"></td>
                  </tr>

                  <tr>
                    <td>Gender</td>
                    <td>{{ $user->gender }}</td>
                  </tr>

                  <tr>
                    <td>Updated At</td>
                    <td>{{ $user->updated_at }}</td>
                  </tr>

                  <tr>
                    <td>Status</td>
                    @switch($user->status)

                                @case(0)
                                    <td><div class="label label-danger">Declined</div></td>
                                @break

                                @case(1)
                                    <td><div class="label label-success">Approved</div></td>
                                @break

                            @endswitch
                  </tr>

                  <tr>
                    <td> <a href="{{ route('profile.edit',$user->id) }}" class="btn btn-primary">Update Profile</a></td>

                    <td> <a href="{{ route('profile.password',$user->id) }}" class="btn btn-info">Change Password</a></td>

                    <td>
                      <a href="{{ route('profile.delete',$user->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete your account?')">Delete Profile</a>
                      </td>
                  </tr>                           
                  
                  </table>
            </div>
          </div>

        </div>

	<!-- /.container-fluid -->
@endsection