@extends('layouts.app')

@section('content')
<div class="container">



  <div class="row">
        <form class="form-horizontal" method="POST"   action="{{route('Post.store')}}">
        {{ csrf_field() }}
              <div class="col-md-12">
                <input id="user_id" type="hidden"  name="user_id" value="{{ $auth->id }}" >

              <input  style="height:100px;width:800px"id="post" type="text" class="form-control" name="post"
              placeholder="what do you think !" required autofocus>
                    <div class="form-group">

                    <div class="col-md-12 ">
                    <button  style="width:300px;padding:10px ;margin-top:10px;"type="submit" class="btn btn-primary ">Post
                    </button>
                    <label for="category_name" class=" control-label"> Category Name</label>
                    <select  style="margin-top:15px"name="category_id">
                    <option value="">no category</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                    </select>
                    <hr>
                    </div>
                    <div class="form-group">

                    </div>
                    </div>
              </div>
        </form>
  </div>
</div>
@endsection
