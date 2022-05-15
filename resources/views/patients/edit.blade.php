@extends('layout')

@section('content')

    <form class="text-center" method="POST" action="{{ route('patients.update', $patient) }}">
        @method('PUT')
        @csrf
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control w-25" name="name" value="{{ $patient->name }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Surname</label>
            <input type="text" class="form-control w-25" name="surname" value="{{ $patient->surname }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control w-25" name="email" value="{{ $patient->email }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Gender</label>
            <input type="text" class="form-control w-25" name="gender" value="{{ $patient->gender }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Age</label>
            <input type="text" class="form-control w-25" name="age" value="{{ $patient->age }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection
