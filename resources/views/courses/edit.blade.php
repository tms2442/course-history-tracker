@extends('layouts.app')

@section('content')
    <div class="container">
        <div class=row>
            <div class="col-lg-6">
                <h2 class="flag mb-3">Edit Course</h2>
                <form method='POST' action='/courses/{{$course->id}}'>
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="sectionName" value="{{$course->sectionName}}"></input>
                    </div>

                    <div class="form-group">
                        <label>Course Section</label>
                        <input type="text" class="form-control" name="term" value="{{$course->term}}">
                    </div>

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="location" value="{{$course->location}}"></input>
                    </div>

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="info" value="{{$course->info}}"></input>
                    </div>

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="faculty" value="{{$course->faculty}}"></input>
                    </div>

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="comments" value="{{$course->comments}}"></input>
                    </div>

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="available" value="{{$course->available}}"></input>
                    </div>

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="capacity" value="{{$course->capacity}}"></input>
                    </div>

                    <div class="form-group">
                        <label>Course Name</label>
                        <input type="text" class="form-control" name="waitList" value="{{$course->waitList}}"></input>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
