@extends('frontend.layouts.app')




@section('content')
<div class="container">
    <h1>User Courses</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Total Lectures</th>
                <th>Completed Lectures</th>
                <th>Progress (%)</th>
            </tr>
        </thead>
        <tbody>
            @forelse($courses as $data)
                <tr>
                    <td>{{ $data['course']->name }}</td>
                    <td>{{ $data['total_lectures'] }}</td>
                    <td>{{ $data['completed_lectures'] }}</td>
                    <td>{{ $data['progress_percentage'] }}%</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No courses found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection


