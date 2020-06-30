@extends('welcome')
@section('content')
  <div class="container">
	    <div class="row">
	      <div class="col-lg-8 col-md-10 mx-auto">

			<a href=" {{ route('write.post') }} " class="btn btn-secondary"> Back </a>
			<a href=" {{ route('add.category') }} " class="btn btn-danger"> Add Category </a>
	        	<a href=" {{ route('all.category') }} " class="btn btn-info"> All Category </a>

			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif



	        <form action=" {{ route('store.category') }} " method="post">
	        @csrf

	          <div class="control-group">
	            <div class="form-group col-xs-12 floating-label-form-group controls">
	              <label>Category Name :</label>
	              <input type="text" class="form-control" placeholder="Category" name="name">
	            </div>
	          </div>


	          <div class="control-group">
	            <div class="form-group col-xs-12 floating-label-form-group controls">
	              <label>Slug Name :</label>
	              <input type="text" class="form-control" placeholder="Slug" name="slug">
	            </div>
	          </div>
	 
	          <div class="form-group">
	            <button type="submit" class="btn btn-primary"> Add Category</button>
	          </div>
	        </form>
	      </div>
	    </div>
  </div>
@endsection