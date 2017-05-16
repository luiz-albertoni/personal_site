@if (session('message'))
    <div class="alert alert-success" style="width: 98%">
        {{ session('message') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" style="width: 98%">
        {{ session('error') }}
    </div>
@endif

<div class="wrapper wrapper-content">
    @yield('content')
</div>