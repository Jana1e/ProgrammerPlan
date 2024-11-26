@extends('frontend.layouts.app')



@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Video Section -->
        <div class="col-lg-8 mb-4">
            <h2 class="mb-3">{{ $course->title }}</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" 
                        src="{{ $currentLecture->video_url }}" 
                        frameborder="0" allowfullscreen>
                </iframe>
            </div>

            <!-- Lecture Navigation -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="" class="btn btn-secondary">
                    Write A Note
                </a>
                @if($nextLecture)
                <form action="{{ route('courses.nextLecture', ['courseId' => $course->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="currentLectureId" value="{{ $currentLecture->id }}">
                    <button type="submit" class="btn btn-success">Next Lecture</button>
                </form>
                @else
                <span class="text-success">Course Completed</span>
                @endif
            </div>
        </div>

        <!-- Course Content Sidebar -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Course Contents</h4>
                </div>
                <div class="card-body">
                    @foreach($course->sections as $section)
                    <div class="mb-3">
                        <h5>
                            {{ $section->title }}
                            <span class="badge bg-primary">{{ $section->lectures->count() }} lectures</span>
                        </h5>
                        <ul class="list-group">
                            @foreach($section->lectures as $lecture)
                            <li class="list-group-item d-flex justify-content-between align-items-center
                            @if($lecture->is_current) bg-success text-white @elseif($lecture->is_completed) bg-primary text-white @endif">
                                {{ $lecture->title }}
                                <span class="text-muted">
                                    @if($lecture->is_current)
                                    Current
                                    @elseif($lecture->is_completed)
                                    Completed
                                    @endif
                                </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
