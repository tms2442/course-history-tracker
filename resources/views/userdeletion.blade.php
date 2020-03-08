@extends('layouts.app')

@section('content')
    <div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Section Name</th>
                <th scope="col">Term</th>
            </tr>
            </thead>
            <tbody>

            @foreach ( $users as $user)

                <tr>
                    <th scope="row"> {{ $user->id }} </th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    <td><a class="btn btn-primary" href="/deleteuser/{{ $user->id }}" role="button">Delete</a>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
@endsection
