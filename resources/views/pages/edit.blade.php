@extends('admin')
@section('content')
    <div class="row">
          <div class="container">
            <h2>Edytuj artykuł</h2>
            {!! Form::model($offer, ['method'=>'PATCH','class'=>'mailform off2 rd-mailform','action'=>['PagesController@update', $offer->id]]) !!}
              <fieldset class="row">
                  <div class="form-group">
                <label class="grid_4">
                  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Tytuł'])!!}
                </label>
                  </div>
                  <div class="form-group">
                <label class="grid_12">
                  {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Opis'])!!}
                </label>
                  </div>
                  <div class="form-group">
                <div class="mfControls grid_12">
                  {!! Form::button('Dodaj artykuł',['class' => 'btn mfProgress', 'type' => 'submit'])!!}
                </div>
                  </div>
              </fieldset>
            {!! Form::close() !!}
          </div>
        </div>
@stop