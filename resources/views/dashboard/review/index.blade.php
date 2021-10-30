@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Reviews</h1>

</div>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

@if (session()->has('deleted'))
<div class="alert alert-success" role="alert">
  {{ session('deleted') }}
</div>
@endif
<div class="table-responsive ">
    <a href="/dashboard/review/create" class="btn btn-primary mb-3">
        Make a Review
    </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Stars </th>
          <th scope="col">Food </th>
          <th scope="col">Title</th>
          <th scope="col">Body</th>
          <th scope="col">Ordered on</th>
          <th scope="col">Action</th>
          

          
        </tr>
      </thead>
      <tbody>
          @foreach ($reviews as $rev)
           <tr>
          <td>{{ $rev->star }}</td>
          <td>Fried rice</td>
          <td>{{ $rev->title }}</td>
          <td>{{ $rev->body }}</td>
          <td>{{ $rev->created_at }}</td>

          <td>
              <form action="/dashboard/review/{{ $rev->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger" onclick="return confirm('Are you sure?')">
                    Delete Review
                </button>
                <input type="hidden" value="{{ $rev->id }}" name="id">
              </form>
            

              <form action="/dashboard/review/{{ $rev->id }}/edit"  class="d-inline">
                @csrf
                <button class="badge bg-success" >
                    Edit Review
                </button>
                <input type="hidden" value="{{ $rev->id }}" name="id">
              </form>
              {{-- <a href="/dashboard/review/{{ $rev->id }}/edit" class="badge bg-success">
                Edit Review</span>
              </a> --}}
          </td>
          
        </tr>   
          @endforeach
        
        
      </tbody>
    </table>
  </div>

@endsection