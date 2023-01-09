@if(session()->has('msg'))
    <div class="alert alert-{{session('alert')}} alert-dismissible fade show" role="alert">
        <strong>Attention!</strong> {{session('msg')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @php
        session()->forget('msg');
        session()->forget('alert');
    @endphp
@endif