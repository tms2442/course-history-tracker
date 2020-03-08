@extends('layouts.app')

@section('content')

    <div class="border-dark">
        <h4>Upload Courses from csv file</h4>
        <form action='/courses/store' enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
        <input type='file' name='bulkData' id="bulkData" />

            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>


        <div class="col-md-5">
            <h4>Upload individual course</h4>
    <form method='post' enctype="multipart/form-data" action='/courses/newCourse'>
        {{ csrf_field() }}
        <div class="form-group">
            <label>Section Name</label>
            <input type="text" class="form-control" name="sectionName">
        </div>
        <div class="form-group">
            <label>Term</label>
            <input type="text" class="form-control" name="term">
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group">
            <label>Info</label>
            <input type="text" class="form-control" name="info">
        </div>
        <div class="form-group">
            <label>Faculty</label>
            <input type="text" class="form-control" name="faculty">
        </div>
        <div class="form-group">
            <label>Comments</label>
            <input type="text" class="form-control" name="comments">
        </div>
        <div class="form-group">
            <label>Available</label>
            <input type="text" class="form-control" name="available">
        </div>
        <div class="form-group">
            <label>Capacity</label>
            <input type="text" class="form-control" name="capacity">
        </div>
        <div class="form-group">
            <label>Waitlist</label>
            <input type="text" class="form-control" name="waitList">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>

    </form>

    </div>
@endsection
