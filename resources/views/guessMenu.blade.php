@extends('layouts.main')

@section('Container')
<div class="container">
    <div class="row justify-content-center">
        <h1>Top Games</h1> 
        @foreach ($games as $game)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src={{ asset('storage/images/' . $game->cover) }} alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$game->name}}</h5>
                    <p class="card-text">So{{$game->description}}</p>
                    <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>  {{($game->price)}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
