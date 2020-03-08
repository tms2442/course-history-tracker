@extends('layouts.app')

@section('content')

    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Select Chart</button>
        <div class="dropdown-menu">
            <a href="/charts" class="dropdown-item">Available</a>
            <a href="/waitlist" class="dropdown-item">Waitlisted Amount</a>
            <a href="/enrolled" class="dropdown-item">Enrolled</a>
            <a href="/capacity" class="dropdown-item">Capacity</a>
        </div>
    </div>

    <div class="col-xl-10">
        {!! $usersChart->container() !!}
    </div>

@endsection
