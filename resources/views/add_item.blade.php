@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form class="form-group col-6" method="POST" action="{{ route('add_item') }}" enctype="multipart/form-data">
            @csrf
            <h1 class="h3 mb-3 font-weight-normal">Add a new item</h1>
            <br />

            <label>Name*</label>
            <input type="text" name="itemname" class="form-control" placeholder="Tesla" value="" required>
            <br />

            <label>Description*</label>
            <input type="text" name="description" class="form-control" placeholder="This item is good..." value="" required>
            <br />

            <label>Price*</label>
            <input type="number" step=".01" name="price" class="form-control" placeholder="99.99" value="" required>
            <br />

            <label>Link*</label>
            <input type="url" name="link" class="form-control" placeholder="https://google.com" value="" required>
            <br />

            <label>Image</label>
            <input type="file" name="image" class="form-control"/>
            <br />

            <input type="hidden" name="list_id" value="{{ $list_id }}">

            <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Add item">
        </form>
    </div>
</div>
@endsection

