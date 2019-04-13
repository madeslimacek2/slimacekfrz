@extends ('layout.layout')

@section('title',$title)

@section('sidebar')
	@parent
		Personal Home Page (PHP)
@endsection

@section('content')
	<p> {{ $konten }}</p>

@stop