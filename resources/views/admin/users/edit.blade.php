@extends('admin.index')


@section('content')

    <h1>Edit User</h1>

    <div class="col-md-3">

        <img src="{{$user->photo ?$user->photo->file :'/images/blankuser.png'}}" alt="problem" class="img-circle img-responsive">

    </div>

    <div class="col-md-9">

    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUserController@update',$user->id],'files'=>true]) !!}


    <div class="form-group">

        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('email','Email:') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}

    </div>


    <div class="form-group">

        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id', $roles ,null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',array(1=>'Active',0=>'Not active'),null,['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('photo_id','Upload image:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

    </div>


    <div class="form-group">

        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}

    </div>


    <div class="form-group">

        {!! Form::submit('Update User',['class'=>'btn btn-primary col-md-6']) !!}

    </div>


    {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy',$user->id]]) !!}



               <div class="form-group">

                   {!! Form::submit('Delete User',['class'=>'btn btn-danger col-md-6']) !!}
               </div>


               {!! Form::close() !!}

    </div>
    @include('admin.includes.form_error')




@endsection