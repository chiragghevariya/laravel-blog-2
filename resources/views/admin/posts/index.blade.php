@extends('admin.index')




@section('content')

    <h1>post</h1>

    <table class="table">

        <thead>

          <tr>
              <th>id</th>
              <th>photo</th>
              <th>owner</th>
              <th>category_id</th>
              <th>title</th>
              <th>body</th>
              <th>created_at</th>
              <th>updete_at</th>
          </tr>

        </thead>

        <tbody>
        @if($posts)

            @foreach($posts as $post)
          <tr>

              <td>{{$post->id}}</td>
              <td><img height="50"  src="{{$post->photo  ? $post->photo->file :'/images/blankuser.png'}}"></td>
              <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
              <td>{{$post->category ? $post->category->name :'not define'}}</td>
              <td>{{$post->title}}</td>
              <td>{{str_limit($post->body,2)}}</td>
              <td>{{$post->created_at->diffForHumans()}}</td>
              <td>{{$post->updated_at->diffForHumans()}}</td>
          </tr>

          @endforeach
            @endif
        </tbody>

      </table>

    @stop