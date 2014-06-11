@include('inc.head')
@include('inc.header')


<?php $msg = Session::get('status'); ?>
@if( Session::has('status') )
<div class="row">
	<div class="col-12 col-sm-12 col-lg-12 col-xs-12">
		@yield('top')
		<?php extract(Session::get('status')); ?>
		<div class="alert alert-{{$tipo}}">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			{{$mensaje}}
		</div>
	</div>
</div>
@endif	

<div class="row">
	<div class="col-12 col-sm-12 col-xs-12 col-lg-12">
		@yield('main')
	</div>
</div>

@include('inc.footer')
