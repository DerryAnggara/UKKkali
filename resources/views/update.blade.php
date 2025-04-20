@extends('layouts.main')
@push('head')
    <title>Update</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-item-center my-5">
        <div class="h2">Update Task</div>
        <a href="" class="btn btn-primary rounded-4">Back</a>
    </div>

<div class="card">
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <label for="name" class="form-label mt-2">Name</label>
            <input type="text" name="name" class="form-control" value="">
        
            <label for="description" class="form-label mt-2">Description</label>
            <input type="text" name="description" class="form-control" value="">
        
            <label for="priority" class="form-label mt-2">Priority Level</label>
            <select name="priority" class="form-select" value="">
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>
            <label for="deadline" class="form-label mt-2">Deadline</label>    
            <input type="date" name="deadline" class="form-control" value="">
            <input type="number" name="id" value="" hidden>
            <button class="btn btn-primary btn-lg mt-4">Save</button>
        </form>     
    </div>
</div>
</div>
@endsection