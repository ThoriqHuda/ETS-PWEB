@extends('layout/main')
@section('container')

<h2>Reviews</h2>

<div class="row ">
    <div class="col-md-6">
        <form action="/blog" method="get">
            <div class="input-group mb-5">
                <input type="text" class="form-control" placeholder="Search" name="search" aria-label="search" aria-describedby="button-addon2" 
                value="{{request('search')  }}">
                <button class="btn btn-danger" type="submit" >Search</button>
            </div>
        </form>
    </div>
</div>
<div class="dropdown mb-5">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Sort By 
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      
      <li><a class="dropdown-item" href="/blog/star"  >Stars</a></li>
      <li><a class="dropdown-item" href="/blog">Latest</a></li>
      <li><a class="dropdown-item" href="/blog/old">Oldest</a></li>
    </ul>
  </div>


   @foreach ($data as $item)
   <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">{{ $item->title }} {{ $item->star }} <i class="bi bi-star-fill"></i></h5>
      <p class="card-text">{{ $item->body }}</p>
      <p class="card-text"><small class="text-muted">{{ $item->created_at->diffForHumans() }} By {{ $item->author }}</small></p>
    </div>
  </div>
   @endforeach
{{ $data->links() }}

@endsection
   