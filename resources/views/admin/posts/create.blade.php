@extends('admin.index')




@section('content')

    <h1>Create Post</h1>
    <div class="row">
       {!! Form::open(['method'=>'POST','action'=>'AdminPostController@store','files'=>'true']) !!}

           <div class="form-group">

               {!! Form::label('title','title:') !!}
               {!! Form::text('title',null,['class'=>'form-control']) !!}

           </div>

            <div class="form-group">

                {!! Form::label('category','category:') !!}
                {!! Form::select('category_id',[''=>'choose categories'] + $categories ,null,['class'=>'form-control']) !!}

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

               {!! Form::submit('create post',['class'=>'btn btn-primary']) !!}
           </div>


           {!! Form::close() !!}

           </div>

        <div class="row" bg-danger>
            @include('admin.includes.form_error')
        </div>

@stop