@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Create a New Staff Member</h3>
    <form action="{{ route('admin.staff.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Staff</button>
    </form>
</div>
@endsection
