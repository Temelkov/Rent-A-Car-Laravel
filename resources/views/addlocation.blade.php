@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Add Location</strong> <a href="/home" class="pull-right btn btn-default btn-xs">Go Back</a></div>

            {{-- laravelcollective --}}
            <div class="panel-body">
              {!!Form::open(['action' => 'LocationsController@store','method' => 'POST'])!!}
                {{Form::Text('city','',['placeholder' => 'City'])}}
                {{Form::Text('email','',['placeholder' => 'Contact Email'])}}
                {{Form::Text('address','',['placeholder' => 'Company Address'])}}
                {{Form::Text('phone','',['placeholder' => 'Contact Phone'])}}
                {{Form::Submit('submit')}}
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
