@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Account Info</h1>

</div>
<div class="table-responsive ">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
           <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td>

            
              <a href="" class="badge bg-danger">
                Delete Account</span>
              </a>

              <form action="/dashboard/user/{{ $user->id }}/edit"  class="d-inline">
                @csrf
                <button class="badge bg-success" >
                    Edit Info
                </button>
                <input type="hidden" value="{{ $user->id }}" name="id">
              </form>



          </td>
        </tr>   
          @endforeach
        
        
      </tbody>
    </table>
  </div>
@endsection