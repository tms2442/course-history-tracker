@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">

                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">{{$courses->sectionName}}</h2>
                                    <h6 class="d-block">Term: {{$courses->term}}</h6>
                                    <h6 class="d-block">Location: {{$courses->location}}</h6>
                                    <h6 class="d-block">Info: {{$courses->info}}</h6>
                                    <h6 class="d-block">Faculty: {{$courses->faculty}}</h6>
                                    <h6 class="d-block">Comments: {{$courses->comments}}</h6>
                                    <h6 class="d-block">Available: {{$courses->available}}</h6>
                                    <h6 class="d-block">Capacity: {{$courses->capacity}}</h6>
                                    <h6 class="d-block">WaitList: {{$courses->waitList}}</h6>
                                    <h6 class="d-block">Created: {{$courses->created_at}}</h6>
                                    <h6 class="d-block">Updated: {{$courses->updated_at}}</h6>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-danger" href="/courses/delete/{{$courses->id}}">DELETE</a>
                        <a class="btn btn-primary" href="/courses/{{$courses->id}}/edit">EDIT</a>
                        <a class="btn btn-primary" href="/courses/">BACK</a>
                    </div>
                </div>


            </div>

        </div>
    </div>

@endsection
