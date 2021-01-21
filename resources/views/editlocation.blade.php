@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Location<a href="/home" class="pull-right btn btn-default btn-xs">Go Back</a></div>

            {{-- laravelcollective --}}
            <div class="panel-body">
              {!!Form::open(['action' => ['LocationsController@update', $location->id],'method' => 'POST'])!!}
                {{Form::Text('city',$location->city,['placeholder' => 'City'])}}
                {{Form::Text('email',$location->email,['placeholder' => 'Contact Email'])}}
                {{Form::Text('address',$location->address,['placeholder' => 'Company Address'])}}
                {{Form::Text('phone',$location->phone,['placeholder' => 'Contact Phone'])}}
                {{Form::hidden('_method', 'PUT')}}
                {{Form::Submit('submit')}}
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
