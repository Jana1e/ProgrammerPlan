{{-- resources/views/events/show.blade.php --}}
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $event->name }}</h1>
    <p><strong>Location:</strong> {{ $event->location }}</p>
    <p><strong>Date & Time:</strong> {{ $event->start_date }}</p>
    <p><strong>Description:</strong></p>
    <p>{{ $event->description }}</p>

    @if($event->image)
        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}" class="img-fluid mb-3">
    @endif

    <p>
        <a href="{{ $event->registration_link }}" target="_blank" class="btn btn-info">Link to Register</a>
    </p>

    @auth
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('info'))
            <div class="alert alert-info">{{ session('info') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(Auth::user()->registrations->where('event_id', $event->id)->isEmpty())
            <form action="{{ route('events.register', $event->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Register for Event</button>
            </form>
        @else
            <form action="{{ route('events.cancel', $event->id) }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-danger">Cancel Registration</button>
            </form>
        @endif
    @endauth

    @guest
        <p class="mt-3"><a href="{{ route('login') }}" class="btn btn-primary">Log in to Register</a></p>
    @endguest
</div>
@endsection --}}
