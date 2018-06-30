@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('vendor.flash.message')
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-heading">
                    @include('layouts.partials.nav-bar')
                </div>                
                
                <div class="panel-body">
                   @include('layouts.partials.add-production')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
