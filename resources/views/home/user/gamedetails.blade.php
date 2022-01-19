@extends('userlayouts.main')

@section('Container')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{$games->category}}</li>
                      <li class="breadcrumb-item active" aria-current="page">{{$games->name}}</li>
                    </ol>
                  </nav>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div>
                            <video src="{{$games->trailer}}" width="100%" autoplay controls></video>
                        </div>
                        <div class="mt-3">
                            <strong>ABOUT THIS GAME</strong>
                        </div>
                        <div class="mt-3">
                            <p>{{$games->long_desc}}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <img src="{{$games->cover}}" width="100%" alt="">
                            <h2><strong>{{$games->name}}</strong></h2>
                            <p>{{$games->description}}</p>
                            <strong>Genre: </strong>{{$games->category}} <br>
                            <strong>Developer: </strong>{{$games->developer}} <br>
                            <strong>Publisher: </strong>{{$games->publisher}} <br>
                        </div>
                        <div class="mt-5">
                            <form method="post" action="">
                                @csrf
                                <button type="submit" class="btn btn-primary"> {{  $games->price }} | add to cart <i class="fa fa-shopping-cart"></i></button>
                            </form>  
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection