@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-7 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Your Profile<a href="/home" class="pull-right btn btn-default btn-xs">Home</a></div>

            {{-- laravelcollective --}}
            <div class="panel-body">
              {!!Form::open(['action' => ['UserController@update', $user->id],'method' => 'POST'])!!}
                {{Form::text('firstname',$user->firstname,['placeholder' => 'First Name'])}}
                {{Form::text('lastname',$user->lastname,['placeholder' => 'Last Name'])}}
                {{Form::text('email',$user->email,['placeholder' => 'Email'])}}
                {{Form::text('date',$user->date,['placeholder' => 'Date'])}}
                {{Form::text('phone',$user->phone,['placeholder' => 'Contact Phone'])}}
                {{Form::hidden('_method', 'PUT')}}
                {{Form::Submit('submit')}}
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
