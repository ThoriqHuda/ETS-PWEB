@extends('dashboard.layouts.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-6">
<main class="form-registration">
    <h1 class="h3 mb-3 fw-normal text-center">Edit Account Info</h1>
    
    <form method="post" action="/dashboard/user/{{ $id }}">
        @method('put')
        @csrf
        <div class="form-floating">
            <input type="text" name="name" class="form-control" id="name" placeholder="name">
            <label for="name">Name</label>
          </div>
        <div class="form-floating">
            <input type="text" name="username" class="form-control" id="username" placeholder="username">
            <label for="username">username</label>
          </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  

      <button class="w-100 btn btn-lg btn-primary" type="submit">Edit Info</button>
      
    </form>
  </main>

    </div>
</div>

  
    
@endsection