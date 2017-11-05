@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class=col-md-2>

        <img style ="height:300px; width:300px"  class=" img-circle"
        @if(!is_null($user->image))
          src="/images/{{$user->image}}"
          @else
          src="{{url('images' ,'profile.jpg')}}"
          @endif
           />



      </div>
        <div class="col-md-8 col-md-offset-2">
          hello {{ ($user -> name) }} <br>
          your data :<br>
          your email :  {{ ($user -> email) }} <br>
          your gender :  {{ ($user -> gender) }} <br>
          your hobbies : <br>
           @foreach(explode(' ', $user->hobbies) as $hobby)
                {{ $hobby }} <br>
                      @endforeach
<a  class="btn btn-primary" href="/Profile/{{$user->id}}/edit"> Edit </a>

        </div>

    </div>

</div>
@endsection
