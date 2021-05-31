@if(!is_null(session('msg')))
  @php
    $message=session('msg');
    $myalert=session('alert');
  @endphp
  
  <div class="alert text-center alert-{{ session('alert') }} alert-dismissible fade show mt-3" role="alert">
    <strong>Alert!</strong> {{ session('msg') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @php
    session()->forget('msg');
    session()->forget('alert');
    @endphp
@endif 