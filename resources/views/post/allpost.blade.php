@extends('welcome')
@section('content')
  <div class="container">
	    <div class="row">
	      <div class="col-lg-12 mx-auto">

								
				<a href=" {{ route('write.post') }} " class="btn btn-info" style="margin-right: 20px;"> Back </a>

		        	<table class="table table-responsive">
		        		<thead>
		        			<td>SL</td>
		        			<td>Category</td>
		        			<td>Title</td>
		        			<td>Image</td>
		        			<td>Action</td>
		        		</thead>
		        		@foreach($post as $row)
		        		<tr>
		        			<td>{{$row->id}}</td>
		        			<td>{{$row->name}}</td>
		        			<td>{{$row->title}}</td>
		        			<td><img src=" {{ URL::to($row->image) }} " style="height: 70px; width: 150px; "></td>
		        			<td>
		        				<a href=" {{URL::to('view/post/'.$row->id)}} " class=" btn btn-sm btn-info">View</a>
		        				<a href=" {{URL::to('edit/post/'.$row->id)}} " class=" btn btn-sm btn-warning">Edit</a>
		        				<a href="{{URL::to('delete/post/'.$row->id)}}" class=" btn btn-sm btn-danger" id="delete">Delete</a>
		        			</td>
		        		</tr>
		        		@endforeach
		        	</table>

	      	</div>
	    </div>
  </div>
@endsection