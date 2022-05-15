@extends('layout')

@section('content')

    <form class="text-center" method="POST" action="{{ route('doctors.update', $doctor) }}">
        @method('PUT')
        @csrf
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control w-25" name="name" value="{{ $doctor->name }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Surname</label>
            <input type="text" class="form-control w-25" name="surname" value="{{ $doctor->surname }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control w-25" name="email" value="{{ $doctor->email }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Position</label>
            <input type="text" class="form-control w-25" name="position" value="{{ $doctor->position }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
