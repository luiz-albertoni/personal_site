@extends('main.main')
@section('content')

<div class="panel panel-default" style="margin-left: 1%; margin-right: 1%; text-align: -webkit-center; background-color: #caf0fa; color: #838383; width: 98%;font-size:x-large; min-height: 800px">
    <div class="panel-body">
        <ul>@lang('messages.welcome')</ul>
        <img alt="image" class="img-responsive fade in" style="width: 60%; margin-top: 5%;" align="middle" src="/images/comp-dev.png"/>
    </div>
</div>
@endsection