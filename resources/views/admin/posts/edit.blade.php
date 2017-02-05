@extends('admin.index')




@section('content')

    <h1>Edit Post</h1>
    <div class="row">
        {!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostController@update',$post->id],'files'=>'true']) !!}

        <div class="form-group">

            {!! Form::label('title','title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('category','category:') !!}
            {!! Form::select('category_id', $categories ,null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('phto','photo:') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('body','Descrition:') !!}
            {!! Form::textarea('body',null,['class'=>'form-control','rows'=>'3']) !!}

        </div>


        <div class="form-group">

            {!! Form::submit('update post',['class'=>'btn btn-primary col-md-6']) !!}
        </div>


        {!! Form::close() !!}

           {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy',$post->id]]) !!}

                <div class="form-group">

                   {!! Form::submit('Delete post',['class'=>'btn btn-danger col-md-6']) !!}
               </div>


               {!! Form::close() !!}

    </div>

    <div class="row" bg-danger>
        @include('admin.includes.form_error')
    </div>

@stop