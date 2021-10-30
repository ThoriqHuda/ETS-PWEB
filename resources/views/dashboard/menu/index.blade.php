@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Menu</h1>

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
    <a href="/dashboard/menu/create" class="btn btn-primary mb-3">
        Add a Menu Item
    </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Name </th>
          <th scope="col">Price </th>
          <th scope="col">Description</th>
          <th scope="col">Added on</th>
          <th scope="col">Action</th>
          

          
        </tr>
      </thead>
      <tbody>
          @foreach ($reviews as $rev)
           <tr>
          <td>{{ $rev->title }}</td>
          <td>{{ $rev->price }}</td>
          <td>{{ $rev->description }}</td>
          <td>{{ $rev->created_at }}</td>

          <td>
              
            

              <form action="/dashboard/menu/{{ $rev->id }}/edit"  class="d-inline">
                @csrf
                <button class="badge bg-success" >
                    Edit Menu info
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