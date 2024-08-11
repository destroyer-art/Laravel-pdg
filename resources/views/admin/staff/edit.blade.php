{{-- resources/views/admin/staff/edit.blade.php --}}
@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Edit Staff Member</h3>
    <form action="{{ route('admin.staff.update', $staff->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $staff->name }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $staff->email }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update Staff</button>
    </form>
</div>
@endsection
