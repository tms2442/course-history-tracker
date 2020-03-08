@extends('layouts.app')

@section('content')
<div>
    <div>
        <a class="btn btn-primary" href="/create" role="button">Add Course</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Section Name</th>
            <th scope="col">Term</th>
            <th scope="col">Location</th>
            <th scope="col">Info</th>
            <th scope="col">Faculty</th>
            <th scope="col">Comments</th>
            <th scope="col">Available</th>
            <th scope="col">Capacity</th>
            <th scope="col">Wait List</th>
        </tr>
        </thead>
        <tbody>

        @foreach ( $courses as $course)

            <tr>
                <th scope="row"> {{ $course->id }} </th>
                <td>{{ $course->sectionName }}</td>
                <td>{{ $course->term }}</td>
                <td>{{ $course->location }}</td>
                <td>{{ $course->info }}</td>
                <td>{{ $course->faculty }}</td>
                <td>{{ $course->comments }}</td>
                <td>{{ $course->available }}</td>
                <td>{{ $course->capacity }}</td>
                <td>{{ $course->waitList }}</td>
                <td><a class="btn btn-primary" href="/courses/{{ $course->id }}" role="button">View</a>
            </tr>

        @endforeach

        </tbody>
    </table>
</div>
@endsection
