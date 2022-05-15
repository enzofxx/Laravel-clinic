@extends('layout')

@section('content')
    <h2 class="text-center">Daktarai</h2>
    <div class="d-flex justify-content-end m-e-2">
        <a class="btn btn-primary" href="{{ route('doctors.create') }}">Pridėti gydytoją</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">Specialybė</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
            <tr>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->surname }}</td>
                <td>{{ $doctor->position }}</td>
                <td>
                    <a class="btn btn-success text-center" href="{{ route('doctors.edit', $doctor->id) }}">Redaguoti</a>
                    <form method="POST" action="{{ route('doctors.destroy', $doctor ) }}" class="d-inline-block">
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
