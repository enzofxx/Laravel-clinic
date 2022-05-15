@extends('layout')

@section('content')

    <form class="text-center" method="POST" action="{{ route('services.update', $service) }}">
        @method('PUT')
        @csrf
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control w-25" name="name" value="{{ $service->name }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Surname</label>
            <input type="text" class="form-control w-25" name="description" value="{{ $service->description }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="number" class="form-control w-25" name="price" value="{{ $service->price }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
