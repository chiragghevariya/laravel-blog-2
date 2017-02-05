@extends('admin.index')

@section('content')

  @if(Session::has('delete_user'))

    <p class="bg-danger">{{Session('delete_user')}}</p>
    @endif





  <h1>User</h1>

    <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>photo</th>
            <th>name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>

            <th>created_at</th>
            <th>updated_at</th>
          </tr>
        </thead>


        <tbody>

        @if($users)
          @foreach($users as $user)


          <tr>
            <td>{{$user->id}}</td>
            <td><img width="50" height="50"  src="{{$user->photo ?$user->photo->file :'/images/blankuser.png'}}" alt="problem"></td>
            <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>

            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>

          @endforeach
        @endif

        </tbody>


      </table>

  @endsection

