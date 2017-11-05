@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <form class="form-horizontal" method="POST"   action="{{route('Category.store')}}">


    
            {{ csrf_field() }}

        <div class="col-md-7 col-md-offset-1">


              <div class="form-group">
                  <label for="category_name" class="col-md-3 control-label"> Category Name</label>

                  <div class="col-md-7">
                      <input id="catgeory_name" type="text" class="form-control" name="category_name"
                       placeholder="Category Name like sports , news" required autofocus>






              <div class="form-group">
                  <div class="col-md-7 ">
                      <button  style="width:300px;padding:10px ;margin-top:10px;"type="submit" class="btn btn-primary ">
                        Create
                      </button>
                  </div>
              </div>
          </form>

        </div>

    </div>

</div>
@endsection
