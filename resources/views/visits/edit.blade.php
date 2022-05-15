@extends('layout')

@section('content')

    <form class="text-center" method="POST" action="{{ route('visits.update', $visit) }}">
        @method('PUT')
        @csrf
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Date</label>
            <input type="text" class="form-control w-25" name="date" value="{{ $visit->date }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Time</label>
            <input type="text" class="form-control w-25" name="time" value="{{ $visit->time }}">
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Daktaras</label>
            <select name="doctor_id">
                @foreach($doctors as $doctor)
                    @if($visit->doctor->id == $doctor->id)
                    <option value="{{ $doctor->id }}" selected> {{ $doctor->name }} {{ $doctor->surname }}</option>
                    @else
                        <option value="{{ $doctor->id }}"> {{ $doctor->name }} {{ $doctor->surname }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Pacientas</label>
            <select name="patient_id">
                @foreach($patients as $patient)
                    @if($visit->patient->id == $patient->id)
                        <option value="{{ $patient->id }}" selected> {{ $patient->name }} {{ $patient->surname }}</option>
                    @else
                        <option value="{{ $patient->id }}"> {{ $patient->name }} {{ $patient->surname }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
            <label for="exampleInputEmail1" class="form-label">Paslauga</label>
            <select name="service_id">
                @foreach($services as $service)
                    @if($visit->service->id == $service->id)
                        <option value="{{ $service->id }}" selected> {{ $service->description }}</option>
                    @else
                        <option value="{{ $service->id }}"> {{ $service->description }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Įrašyti</button>
    </form>

@endsection
