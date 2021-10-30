@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Make a Review</h1>
  
  </div>

 
      
 
<div class="col-lg-8">
    <form method="post" action="/dashboard/review" >
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error ('title') is-invalid
            
        @enderror"  id="title" name="title">
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Body</label>
        <input type="text" class="form-control @error('body') is-invalid
            
        @enderror"  id="body" name="body">
      </div>
      
      <div class="mb-3">
        <label for="title" class="form-label">Stars</label>
        <select class="form-select" name="star_count">
            <option selected>Pick an option</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>
        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
        <input type="hidden" value="{{ auth()->user()->name }}" name="name">
      
      <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>

</div>
@endsection