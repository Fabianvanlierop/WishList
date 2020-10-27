@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($items as $key => $data)
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-horizontal d-flex">
                            <div class="img-square-wrapper">
                                <img class="" src="{{url('/images/' . $data->image) }}" alt="Card image cap" width="200" height="200">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{ $data->name }}</h4>
                                <p class="card-text">{{ $data->description }}</p>
                            </div>
                            <div class="card-body col-md-3">
                                <a href="{{ $data->link }}" target="blank">
                                    <h1>€{{ $data->price }}</h1>
                                    <h5>Buy me!</h5>
                                </a>
                                <br /><br />
                                <a href="{{ route("delete_item_wishlist", $data->id) }}" class="text-danger">
                                    <h6>Delete</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
    @endforeach
</div>
@endsection
