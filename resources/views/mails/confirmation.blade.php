@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            hi {{$name}}
            <p> click <a href="{{route('confirmation',$token)}}">here </a> to confirm </p>
        </div>
    </div>
</div>
@endsection
