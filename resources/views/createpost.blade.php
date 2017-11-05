@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <form class="form-horizontal" method="POST"   action="{{route('Post.store')}}">


        

            {{ csrf_field() }}

        <div class="col-md-7 col-md-offset-1">


              <div class="form-group">
                  <label for="category_name" class="col-md-3 control-label"> post</label>

                  <select  style="margin-top:15px"name="category_id">
                    <option value="">no category</option>

                        @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                      @endforeach
                  </select>
                  <div class="col-md-7">
                      <input  style="height:400px"id="post" type="text" class="form-control" name="post"
                       placeholder="what do you think !" required autofocus>





              <div class="form-group">
                  <div class="col-md-7 ">
                      <button  style="width:300px;padding:10px ;margin-top:10px;"type="submit" class="btn btn-primary ">
                        post
                      </button>
                  </div>
              </div>
          </form>

        </div>

    </div>

</div>
@endsection
