@if (count($errors)>0)
<div class="alert alert-danger">
	<ul type="none" >
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@if(Session::has('error'))
<p class="alert alert-danger">{{Session::get('error')}}</p>
@endif

@if(Session::has('alert'))
<p class="alert alert-success row-md-6">{{Session::get('alert')}}</p>
@endif