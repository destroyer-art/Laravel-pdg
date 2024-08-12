@extends('layouts.staff ')

@section('content')

<div class="card-box table-responsive">
    <div class="header">
        <h3>Policies</h3>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Policy</th>
                <th>Plan Reference</th>
                <th>Member Name</th>
                <th>Investment House</th>
            </tr>
        </thead>
        <tbody>
            @foreach($policies as $policy)
            <tr>
                <td>{{ $policy->code }}</td>
                <td>{{ $policy->plan_reference }}</td>
                <td>{{ $policy->first_name }} {{ $policy->last_name }}</td>
                <td>{{ $policy->investment_house }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
