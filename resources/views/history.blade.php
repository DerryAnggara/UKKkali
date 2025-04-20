@extends('layouts.main')
@push('head')
    <title>Task History</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-item-center my-5">
        <div class="h2">Completed Task History</div>
        <a href="" class="btn btn-primary rounded-4">Back</a>
    </div>
<div class="table-responsive">
    <table class="table table-striped w-100 text-center align-middle">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Priority</th>
            <th>Deadline</th>
            <th>Action</th>
        </tr>
        
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <form action="" method="POST" style="display:inline;">
                    @csrf
                    <button style="border: none; background: none; cursor: pointer;">
                        <i class="bi bi-trash-fill text-danger"></i>
                    </button>
                </form>          
            </td>
        </tr>
       
    </table>
</div>
</div>
@endsection
