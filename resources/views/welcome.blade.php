@extends('main.main')
@section('content')

<div ng-controller="ApiControllerUserShow as vm"  >

            <div class="content">
                <div class="container">
                    <h2>Button</h2>
                    <p>The .btn class adds basic styling to a button:</p>
                    <button type="button" class="btn">Basic Button</button>
                </div>

                <div class="container">
                    <h2>Button</h2>
                    <p>The .btn-success class indicates a successful or positive action:</p>
                    <button type="button" class="btn btn-success">Success</button>
                </div>

            </div>
</div>

@endsection