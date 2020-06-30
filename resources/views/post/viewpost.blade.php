@extends('welcome')
@section('content')
  <div class="container">
	    <div class="row">
	      <div class="col-lg-8 col-md-10 mx-auto">
	      <a href=" {{ route('all.post') }} " class="btn btn-info"> All Posts </a>

	      <div>
	      		<p> Post Name: {{ $post->name }} </p>
	      		<h3> {{ $post->title }} </h3>
	      		<img src=" {{ URL::to($post->image) }}" height="340px;">
	      		<p> {{ $post->details }} </p>
	      </div>

	      </div>
	    </div>
  </div>
@endsection