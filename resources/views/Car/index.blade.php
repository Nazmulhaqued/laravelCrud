@if(Session::has('message'))
	<h2>{{ Session::get('message')}}</h2>
@endif


<table border="1">
	<tr>
		<td>ID</td>
		<td>Title</td>
		<td>Color</td>
		<td>Action</td>
	</tr>
@foreach($allData as $item)	
	<tr>
		<td>{{$item->id}}</td>
		<td>{{$item->title}}</td>
		<td>{{$item->color}}</td>
		<td>View |<a href="{{url('car',[$item->id, 'edit'])}}"> Edit </a>| <a href="{{url('car',[$item->id,'delete'])}}">Delete</a></td>
	</tr>
@endforeach

</table>