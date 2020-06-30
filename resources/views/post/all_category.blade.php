@extends('welcome')
@section('content')
  <div class="container">
	    <div class="row">
	      <div class="col-lg-12 col-md-12 mx-auto">

				<a href=" {{ route('add.category') }} " class="btn btn-secondary" style="margin-right: 20px;"> Back </a>
				
				<a href=" {{ route('add.category') }} " class="btn btn-danger" style="margin-right: 20px;"> Add Category </a>
				
		        <a href=" {{ route('all.category') }} " class="btn btn-info"> All Category </a>

		        	<table class="table table-responsive">
		        		<thead>
		        			<td>SL</td>
		        			<td>Category Name</td>
		        			<td>Slug Name</td>
		        			<td>Action</td>
		        		</thead>
		        		@foreach($category as $row)
		        		<tr>
		        			<td>{{$row->id}}</td>
		        			<td>{{$row->name}}</td>
		        			<td>{{$row->slug}}</td>
		        			<td>
		        				<a href=" {{URL::to('view/category/'.$row->id)}} " class=" btn btn-sm btn-info">View</a>
		        				<a href=" {{URL::to('edit/category/'.$row->id)}} " class=" btn btn-sm btn-warning">Edit</a>
		        				<a href="{{URL::to('delete/category/'.$row->id)}}" class=" btn btn-sm btn-danger" id="delete">Delete</a>
		        			</td>
		        		</tr>
		        		@endforeach
		        	</table>

	      	</div>
	    </div>
  </div>
@endsection