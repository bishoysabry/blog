@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          @foreach( $users as $user)
          <div class="">
            <a href="{{route('Users.show',$user->id)}}" > {{$user->name}}</a>  <br>
          {{$user->gender}} <br>
          {{$user->hobbies}} <br>
          <div class="pull-right">
          <a  class="btn btn-primary" href="{{route('Users.edit',$user->id)}}" > {{trans('file.edit')}} </a>
          <a  class="btn btn-danger"  href="{{route('Users.destroy',$user->id)}}" > {{trans('file.delete')}} </a>

        </div>
        <br>
        </div>
          @endforeach

    </div>
</div>
@endsection
