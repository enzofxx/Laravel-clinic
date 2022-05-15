@extends('layout')

@section('content')
    <h2 class="text-center">Pacientai</h2>
    <div class="d-flex justify-content-end m-e-2">
        <a class="btn btn-primary" href="{{ route('patients.create') }}">Pridėti pacientą</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">El. paštas</th>
            <th scope="col">Lytis</th>
            <th scope="col">Amžius</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->surname }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->gender }}</td>
                <td>{{ $patient->age }}</td>
                <td>
                    <a class="btn btn-success text-center" href="{{ route('patients.edit', $patient->id) }}">Redaguoti</a>
                    <form method="POST" action="{{ route('patients.destroy', $patient ) }}" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-center" type="submit" onclick="return confirm('Ar tikrai norite pašalinti?')">Ištrinti</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
