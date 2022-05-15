@extends('layout')

@section('content')

    <form class="text-center" method="POST" action="{{ route('services.store') }}">
        @csrf
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control w-25" name="name">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <input type="text" class="form-control w-25" name="description">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="text" class="form-control w-25" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
