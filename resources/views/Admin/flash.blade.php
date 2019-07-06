@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <i data-feather="check"></i> 
        <span class="mx-2">{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-error" role="alert">
        <i data-feather="alert-circle"></i> 
        <span class="mx-2">{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('warning'))
    <div class="alert alert-warning" role="alert">
        <i data-feather="alert-circle"></i> 
        <span class="mx-2">{{ $message }}</span>
    </div>
@endif
@if ($message = Session::get('info'))
    <div class="alert alert-info" role="alert">
        <i data-feather="info"></i> 
        <span class="mx-2">{{ $message }}</span>
    </div>
@endif
