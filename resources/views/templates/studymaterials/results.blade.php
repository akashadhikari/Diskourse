@extends('templates.default')

@section('content')
	<h4>Your search for "{{Request::input('query') }}"</h4>
	<hr/>
	@if(!$files->count())
	<p>No matched results sorry.</p>
	@else
		@foreach( $files as $file )
	        <div class="col-sm-4">
	          <div class="thumbnail">
	            <img src="http://placehold.it/320x200" alt="" class="img-responsive">
	              <div class="caption">
	                <p><b>Faculty: </b>{{ $file->getFacultyName() }}</p>
                    <p><b>Subject:</b> {{ $file->getSubject() }}</p>
	                <p><a href="{{URL::asset($file->getPath())}}" class="btn btn-block btn-primary" role="button">Open</a></p>
	              </div>
	         </div>
	        </div>     
		@endforeach
	@endif
@stop
