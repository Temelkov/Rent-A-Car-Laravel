@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Car<a href="/locations/{{$cars->locations_id}}" class="pull-right btn btn-default btn-xs">Go Back</a></div>

            {{-- laravelcollective --}}
            <div class="panel-body">
              {!!Form::open(['action' => ['CarsController@update', $cars->id],'method' => 'POST'])!!}

                {{Form::Text('brand',$cars->brand,['placeholder' => 'Brand'])}}
                {{Form::Text('model',$cars->model,['placeholder' => 'Model'])}}
                {{Form::Text('year',$cars->year,['placeholder' => 'Year'])}}
                {{Form::Text('fuel',$cars->fuel,['placeholder' => 'Fuel'])}}
                {{Form::Text('price',$cars->price,['placeholder' => 'Price Per Day'])}}

                {{Form::hidden('_method', 'PUT')}}
                {{Form::Submit('submit')}}
              {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection
