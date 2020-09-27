@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="form-group col-6" method="POST" action="{{ route('new_wishlist') }}" enctype="multipart/form-data">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal">Create a new list</h1>
            <br />

            <label>Name*</label>
            <input type="text" name="name" class="form-control" placeholder="Sinterklaas" value="" required>
            <br />

            <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Create list">
        </form>
    </div>
    <br />
    <br />

    <h1>My wishlists</h1>
    <table class="table mt-3">
        <thead>
            <th>ID</th>
            @if (auth()->user()->role == "admin")
                <th>User ID</th>
            @endif
            <th>Add item</th>
            <th>Name</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($wishlists as $key => $data)
                <tr>
                    <td>{{ $data->id }}</td>

                    @if (auth()->user()->role == "admin")
                        <td>{{ $data->user_id }}</td>
                    @endif
                    <td><a href="{{ route('add_item_wishlist', $data->id) }}">Add Item</a></td>
                    <td><a href="{{ route('wishlist', $data->id) }}">{{ $data->name }}</a></td>
                    <td><a href="{{ route('delete_wishlist', $data->id ) }}" role="button">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
