@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
  <strong class="text-capitalize">{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert">
  <strong class="text-capitalize">{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning" role="alert">
  <strong class="text-capitalize">{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info" role="alert">
  <strong class="text-capitalize">{{ $message }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Please check the form below for errors</strong>
</div>
@endif
