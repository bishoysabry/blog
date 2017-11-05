@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class=col-md-4>

        <img style ="height:200px; width:200px"  class=" img-circle"
        @if(!is_null($user->image))
          src="/images/{{$user->image}}"
          @else
          src="{{url('images' ,'profile.jpg')}}"
          @endif
           />



      </div>
        <div class="col-md-8 ">
          hello {{ ($user -> name) }} <br>
          <form class="form-horizontal" method="POST"   action="{{route('Profile.update',$user->id)}}">

              {{ csrf_field() }}






                <div class="form-group">
                    <label for="Reason" class="control-label">Reason to deactivate this account</label>
<input id="reason" type="text" class="form-control"
name="reason" placeholder="write the reasons here" required autofocus>
<input id="closed" type="hidden" class="form-control"
name="closed" value=1>
<input id="id" type="hidden" class="form-control"
name="closed" value="{{ ($user -> id) }}">
<input name="_method" type="hidden" value="PATCH">



                <div class="form-group">
                    <div>
                      <a style="width:200px;padding:10px ;margin:10px;"class="btn btn-default btn-close" href="{{ route('home') }}">Cancel</a>
                        <button  style="width:200px;padding:10px ;margin:10px;"type="submit" class="btn btn-primary ">
                          Deactivate
                        </button>
                    </div>
                </div>
            </form>



        </div>



</div>
@endsection
