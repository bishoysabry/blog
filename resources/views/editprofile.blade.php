@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <form class="form-horizontal" method="POST"  enctype="multipart/form-data"action="/Profile/{{$user->id}}">
          {{method_field('PUT')}}
            {{ csrf_field() }}
            <div class=col-md-3>
            <img style ="height:300px"  class=" img-circle"
            src="{{url('images' , $user->image?'$user->image':'profile.jpg')}}"   />


  <label for="image">change image</label>
  <input id="image" type="file" class="form-control" name="image" >
  </div>


        <div class="col-md-7 col-md-offset-1">


              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-md-3 control-label">Name</label>

                  <div class="col-md-7">
                      <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                      @if ($errors->has('name'))
                          <span class="help-block">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-3 control-label">E-Mail Address</label>

                  <div class="col-md-7">
                      <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>
              <div class="form-group">
                  <label for="gender" class="col-md-3 control-label">Gender</label>

                  <div class="col-md-7">
                    <input id="gender"
                    @if($user->gender=='male')
                    checked="checked"
                    @endif  name="gender" type="radio" value="male">  Male<br>
                    <input id="gender"
                    @if($user->gender=='female')
                    checked="checked"
                    @endif   name="gender" type="radio" value="female"> Female

                  </div>
              </div>
              <div class="form-group">
                  <label  for="hobbies" class="col-md-3 control-label">Hobbies</label>

                  <div class="col-md-7">
                  <input    name="hobbies[]" type="checkbox" value="Football"
                  @if (strpos($user->hobbies, 'Football')!== false)
                  checked="checked"
                  @endif> Football <br>
                  <input   name="hobbies[]" type="checkbox" value="Vallyball"
                  @if (strpos($user->hobbies, 'Vallyball')!== false)
                  checked="checked"
                  @endif> Vallyball <br>
                  <input   name="hobbies[]" type="checkbox" value="Swimming"
                  @if (strpos($user->hobbies, 'Swimming')!== false)
                  checked="checked"
                  @endif> Swimming <br>
                  <input   name="hobbies[]" type="hidden" value="">

                  </div>
              </div>



              <div class="form-group">
                  <div class="col-md-10 col-md-offset-3 ">
                      <button  style="width:300px;padding:10px ;margin:10px;"type="submit" class="btn btn-primary ">
                        Update
                      </button>
                  </div>
              </div>
          </form>

        </div>

    </div>

</div>
@endsection
