@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            
            <div class="panel-heading"><strong>Describe the desired car</strong> <a href="/home" class="pull-right btn btn-default btn-xs">Go Back</a></div>
            
                {{-- laravelcollective --}}
                <div class="panel-body">
                {!!Form::open(['action' => 'CarsController@store','method' => 'POST'])!!}
                    {{Form::label('locations_id', 'Choose a City') }}
                    {{Form::select('locations_id', $location ,'', ['class'=>'form-control'])}}
                    {{Form::bsText('brand','',['placeholder' => 'Audi'])}}
                    {{Form::bsText('model','',['placeholder' => 'A6'])}}
                    {{Form::bsText('year','',['placeholder' => '2008'])}}
                    {{Form::bsText('fuel (Gas, Diesel, Petrol)','',['placeholder' => 'Diesel'])}}
                    {{Form::bsText('price per day (EUR)','',['placeholder' => '500'])}}
                    {{Form::bsSubmit('submit')}}
                {!! Form::close() !!}
                </div>
        </div>
    </div>
</div>
@endsection