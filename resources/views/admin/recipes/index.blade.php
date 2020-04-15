@extends('layouts.admin')


@section('content')
    <h1>Recipes</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>

            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Action</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
        </tr>
        </thead>

        @if($recipes)

            @foreach($recipes as $recipe)
                <tbody>
                <tr>
                    <th scope="row">{{$recipe->id}}</th>
                    <td>
                        <a href="/admin/recipes/{{$recipe->id}}/edit" class="btn btn-success">
                            <img class="img-responsive" src="{{ asset ('images/'. $recipe->img)}}" alt="">
                        </a>
                    </td>
                    <td>{{$recipe->title}}</td>
                    <td>{{$recipe->text}}</td>

                    <td>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['RecipeController@destroy', $recipe->id]]) !!}

                            <div class="form-group">
                                {!! Form::submit('Delete', ['class'=> 'btn btn-danger']) !!}
                            </div>

                        {!! Form::close() !!}
                    </td>
                    <td>{{$recipe->created_at->diffForHumans()}}</td>
                    <td>{{$recipe->updated_at->diffForHumans()}}</td>
                </tr>

                </tbody>
            @endforeach
        @endif
    </table>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-6">
            {{$recipes->render()}}
        </div>
    </div>

@stop
