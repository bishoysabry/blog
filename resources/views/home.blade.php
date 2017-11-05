@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

          @foreach( $posts as $post)
                <strong> {{ $post->user->name }} </strong><br>
                <div class="pull-right"style="color:red;">
                {{$post->category->category_name}}
                 </div>
               {{ $post->post }} <br>
               {{ $post->comments }} <br> <?php //dont know how get only comments with this post_id ?>
               <form class="form-horizontal" method="POST"   action="{{route('Comment.store')}}">
                   {{ csrf_field() }}
                      <div class="form-group">
                      <input class=" form-control" id="comment" type="text"
                      name="comment" placeholder="comment ..." required autofocus>
                      <input id="post_id" type="hidden" name="post_id" value="{{$post->id}}">
                      <input id="user_id" type="hidden" name="user_id" value="{{$auth->id}}">
                      <button  type="submit" class="btn btn-primary ">
                       comment
                      </button>
                      </div>
                 </form>
          @endforeach

    </div>
</div>
@endsection
