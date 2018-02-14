
@if(Session::has('message'))
	<h2>{{ Session::get('message')}}</h2>
@endif

<a href="{{ url('/car')}}" >See All Car</a>

{!! Form::model($data,['url'=>'car/'.$data->id.'/update'])!!}

{!! Form::label('title', 'Title') !!}
{!! Form::text('title') !!}

{!! Form::label('color', 'Color') !!}
{!! Form::text('color') !!}

{!! Form::submit('Save') !!}
{!! Form::close() !!}