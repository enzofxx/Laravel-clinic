@extends('layout')

@section('content')

    <form class="text-center" method="POST" action="{{ route('visits.store') }}">
        @csrf
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input type="text" class="form-control w-25" name="date">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Time</label>
            <input type="text" class="form-control w-25" name="time">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Daktaras</label>
            <select name="doctor_id">
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}"> {{ $doctor->name }} {{ $doctor->surname }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Pacientas</label>
            <select name="patient_id">
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}"> {{ $patient->name }} {{ $patient->surname }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Paslauga</label>
            <select name="service_id">
                @foreach($services as $service)
                    <option value="{{ $service->id }}"> {{ $service->description }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Įrašyti</button>
    </form>

@endsection
