@extends('layouts.layout0')

@section('title' ) 
{{empty($tagsStr)?'Click Go!': $tagsStr}}
@endsection

@section('content')

    <!-- Bootstrap Boilerplate... -->

	{{ Html::style('css/photopage.css',array(),true) }}
<div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
<div>

{!! Form::open(array('id'=>'searchForm', 'url' => URL::to('search/flickr', array(), true), 'method' => 'get')) !!}
	<div class="form-group row">
<!--
		<div class='col-sm-offset-1 col-sm-3 '>
		{!! Form::label('tags', 'Search Tagged Photos', array('class' => 'form-control-label')) !!}
		</div>
-->
		<div class='col-sm-offset-2 col-sm-6'>
		{!! Form::text('tags', $tagsStr, array('class' => 'form-control input-large search-query')) !!}
		</div>
        	<div class="col-sm-2">
		{!! Form::button('Go!',  array('type' => 'submit', 'class' => 'btn btn-default')) !!}
		</div>
	</div>
<div id="pageNumber" class="hidden">{{$pageNumber or 1}}</div>
{!! Form::close() !!}
<div class="row">
	<div class="grid">
		<div class="grid-sizer"></div>
		@foreach($photos as $photo) 
<!-- // http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}.jpg -->
			<div class="grid-item">
			<img src="{{ 'https://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg'}} " /> 
			</div>
		@endforeach
		</div>
	</div>

</div>
@endsection
