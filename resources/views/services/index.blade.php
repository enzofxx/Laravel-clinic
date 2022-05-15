@extends('layout')

@section('content')
    <h2 class="text-center">Paslaugos</h2>
    <div class="d-flex justify-content-end m-e-2">
        <a class="btn btn-primary" href="{{ route('services.create') }}">Pridėti paslaugą</a>
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
        @foreach($services as $service)
            <tr>
                <td>{{ $service->name }}</td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->price }}</td>
                <td>
                    <a class="btn btn-success text-center" href="{{ route('services.edit', $service->id) }}">Redaguoti</a>
                    <form method="POST" action="{{ route('services.destroy', $service ) }}" class="d-inline-block">
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
