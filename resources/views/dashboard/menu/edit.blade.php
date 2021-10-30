@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Review</h1>
  
  </div>

 
      
 
<div class="col-lg-8">
    <form method="post" action="/dashboard/menu/{{ $id }}" >
      @method('put')
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Name</label>
        <input type="text" class="form-control @error ('title') is-invalid
            
        @enderror"  id="title" name="name">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Price </label>
        <input type="text" class="form-control @error('body') is-invalid
            
        @enderror"  id="body" name="price">
      </div>
      
      <div class="mb-3">
        <label for="title" class="form-label">Description </label>
        <input type="text" class="form-control @error('body') is-invalid
            
        @enderror"  id="body" name="description">
      </div>
        
        <input type="hidden" value="{{ $id }}" name="id">
      <button type="submit" class="btn btn-primary">Update Menu</button>
    </form>

</div>
@endsection