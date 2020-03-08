@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Page</div>

                <div class="card-body">
                    <div class="row-cols-1">
                        <a class="btn btn-primary btn-lg btn-block" href="/registers" role="button">Create New User</a>
                    </div>
                    <br />
                    <div class="row-cols-1">
                        <a class="btn btn-primary btn-lg btn-block" href="/deleteuser" role="button">Delete User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
