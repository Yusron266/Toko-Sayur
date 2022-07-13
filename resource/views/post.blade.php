@extends('layouts.template')

@section('container')

<div class="container">
  
  <div class="row justify-content-center mb-5">
    
    <div class="col-md-8">
      <h2 class="mb-3">{{ $post->title }}</h2>
      
      <p>Jenis Sayur: <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
      
      @if ($post->image)
<div style="max-height: 350px; overflowh:hidden;">
<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
</div>
@else
<img src="https://source.unsplash.com/720x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
@endif


<article class="my-3 fs-4">
  
{!! $post->body !!}

</article>

@if ($post->harga_diskon) 
    <h5>Harga Sayur</h5>
    <h3><span class="badge bg-success">Rp.{{ $post->harga_diskon }}</span></h3>
    
    @else 
    
    <h5>Harga Sayur</h5>
    <h3><span class="badge bg-secondary text-decoration-none">Rp.{{ $post->harga }}</span></h3>
    
    @endif

<a href="/posts" class="d-block mt-4">Back</a>
    </div>
    
  </div>
  
</div>




@endsection
