@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-7 col-md-offset-2">
        <div class="panel panel-default">

            <div class="panel-heading"><strong>Add Car</strong> <a href="/home" class="pull-right btn btn-default btn-xs">Go Back</a></div>

                {{-- laravelcollective --}}
                <div class="panel-body">
                {!!Form::open(['action' => 'CarsController@store','method' => 'POST'])!!}
                    {{Form::label('locations_id', 'Choose a City') }}
                    {{Form::select('locations_id', $location ,'', ['class'=>'form-control'])}}
                    {{Form::Text('brand','',['placeholder' => 'Brand'])}}
                    {{Form::Text('model','',['placeholder' => 'Model'])}}
                    {{Form::Text('year','',['placeholder' => 'Year'])}}
                    {{Form::Text('fuel','',['placeholder' => 'Fuel'])}}
                    {{Form::Text('price','',['placeholder' => 'Price per'])}}
                    {{Form::Submit('submit')}}
                {!! Form::close() !!}
                </div>
        </div>
    </div>
</div>
@endsection
