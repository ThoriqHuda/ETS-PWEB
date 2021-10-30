@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add a Menu Item</h1>
  
  </div>

 
      
 
<div class="col-lg-8">
    <form method="post" action="/dashboard/menu" >
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Menu name</label>
        <input type="text" class="form-control @error ('title') is-invalid
            
        @enderror"  id="title" name="name">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Price</label>
        <input type="text" class="form-control @error('body') is-invalid
            
        @enderror"  id="body" name="price">
      </div>
      
      <div class="mb-3">
        <label for="title" class="form-label">Description</label>
        <input type="text" class="form-control @error('body') is-invalid
            
        @enderror"  id="body" name="description">
      </div>

    
      
      <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>

</div>
@endsection