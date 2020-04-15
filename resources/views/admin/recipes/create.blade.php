@extends('layouts.admin')

@section('content')

@include('admin.includes.tinyeditor')
    <h1>Create Recipe</h1>
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="row">
        {!! Form::open(['method'=>'POST', 'action'=>'RecipeController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('img', 'Recipe Image:') !!}
            {!! Form::file('img', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('text', 'Body:') !!}
            {!! Form::textarea('text', null, ['class'=>'form-control']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Create Recipe', ['class'=> 'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@stop


