@extends('admin.index')



@section('content')

    <h1>Categories</h1>


    <div class="col-sm-6">

           {!! Form::open(['method'=>'POST','action'=>'AdminCategoriController@store']) !!}

               <div class="form-group">

                   {!! Form::label('category','categories:') !!}
                   {!! Form::text('name',null,['class'=>'form-control']) !!}

               </div>

               <div class="form-group">

                   {!! Form::submit('create Categories',['class'=>'btn btn-primary']) !!}
               </div>


               {!! Form::close() !!}


    </div>


    <div class="col-sm-6">

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
            </thead>
            <tbody>
            @if($categoris)
                @foreach($categoris as $cat)

                    <tr>
                        <td>{{$cat->id}}</td>
                        <td><a href="#"></a>{{$cat->name}}</td>
                        <td>{{$cat->created_at->diffForHumans()}}</td>
                        {{--<td>{{$cat->created_at ? $cat->created_at->diffForHumans() :'no data'}}</td>--}}
                        <td>{{$cat->updated_at->diffForHumans()}}</td>
                    </tr>

                @endforeach

            @endif
            </tbody>
        </table>


    </div>


    @stop