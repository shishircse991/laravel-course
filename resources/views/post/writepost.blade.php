@extends('welcome')
@section('content')
  <div class="container">
	    <div class="row">
	      <div class="col-lg-8 col-md-10 mx-auto">

	        	<a href=" {{ route('add.category') }} " class="btn btn-danger"> Add Category </a>
	        	<a href=" {{ route('all.category') }} " class="btn btn-info"> All Category </a>
	        	<a href=" {{ route('all.post') }} " class="btn btn-info"> All Posts </a>

				<br><br>
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif

	        <form action=" {{ route('store.post') }} " method="post" enctype="multipart/form-data">
	        @csrf
	          <div class="control-group">
	            <div class="form-group col-xs-12">
	              <label>Post Name :</label>
	              <input type="text" class="form-control" placeholder="Title" name="title" required>
	            </div>
	          </div>
	 

	          <div class="control-group">
	            <div class="form-group col-xs-12">
	              <label for="Category">Category</label>
	              <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="category_id">
	              @foreach($category as $row)
	              	<option value="{{ $row->id }}">{{ $row->name }}</option>
	              @endforeach
	              </select>
	            </div>
	          </div>
	     
	          
	          <div class="control-group">
	            <div class="form-group col-xs-12">
	              <label>Post Image :</label>
	              <input type="file" class="form-control" required name="image">
	            </div>
	          </div>

	          <div class="control-group">
	            <div class="form-group col-xs-12">
	              <label>Post Details :</label>
	              <textarea rows="5" class="form-control" placeholder="Details" required name="details"></textarea>
	            </div>
	          </div>
	          <br>
	          <div id="success"></div>
	          <div class="form-group">
	            <button type="submit" class="btn btn-primary" id="sendMessageButton"> Submit </button>
	          </div>
	        </form>
	      </div>
	    </div>
  </div>
@endsection