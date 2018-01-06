@if(\Illuminate\Support\Facades\Session::has('sweet-alert'))
    {!! \Illuminate\Support\Facades\Session::get('sweet-alert') !!}
@endif