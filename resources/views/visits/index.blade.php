@extends('layout')

@section('content')
    <h2 class="text-center">Vizitai</h2>


{{--    <table class="table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">Data</th>--}}
{{--            <th scope="col">Laikas</th>--}}
{{--            <th scope="col">Gydytojas</th>--}}
{{--            <th scope="col">Pacientas</th>--}}
{{--            <th scope="col">Paslauga</th>--}}
{{--            <th></th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($visits as $visit)--}}
{{--            <tr>--}}
{{--                <td>{{ $visit->date }}</td>--}}
{{--                <td>{{ $visit->time }}</td>--}}
{{--                <td>{{ $visit->doctor->name }} {{ $visit->doctor->surname }}</td>--}}
{{--                <td>{{ $visit->patient->name }} {{ $visit->patient->surname }}</td>--}}
{{--                <td>{{ $visit->service->name }}</td>--}}
{{--                <td>--}}
{{--                    <a href="{{ route('visits.edit', $visit->id) }}">Redaguoti</a>--}}
{{--                    <form method="POST" action="{{ route('visits.destroy', $visit->id ) }}">--}}
{{--                        @csrf--}}
{{--                        <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                    </form>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}


    <div class="d-flex justify-content-end m-e-2">
        <a class="btn btn-primary" href="{{ route('visits.create') }}">Pridėti Vizitą</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Data</th>
            <th scope="col">Laikas</th>
            <th scope="col">Gydytojas</th>
            <th scope="col">Pacientas</th>
            <th scope="col">Paslauga</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($visits as $visit)
            <tr>
                <td>{{ $visit->date }}</td>
                <td>{{ $visit->time }}</td>
                <td>{{ $visit->doctor->name }} {{ $visit->doctor->surname }}</td>
                <td>{{ $visit->patient->name }} {{ $visit->patient->surname }}</td>
                <td>{{ $visit->service->description }}</td>
                <td>
                    <a class="btn btn-success text-center" href="{{ route('visits.edit', $visit->id) }}">Redaguoti</a>
                    <form method="POST" action="{{ route('visits.destroy', $visit ) }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
