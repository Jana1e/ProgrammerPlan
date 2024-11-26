<style>
    .event-image {
    width: 60px;
    height: 50px;
    object-fit: cover;
}
</style>
<div class="container">
    <!-- Events Section -->
    <div class="card_shadow">
        <div class="card-body pb-0 shadow_sec_padd">
            <div class="d-flex justify-content-between mb-3">
                <div class="heading_sec">
                    <h2 class="main_heading">Events</h2>
                </div>
                <div class="heading_sec">
                    <a href="{{ url('/events') }}" class="see_all_text">See All</a>
                </div>
            </div>

            <div class="news">
                @php
                    // Fetch events directly inside the view
                    $events = \App\Models\Event::latest()->take(5)->get();
                @endphp

                @forelse($events as $event)
                <div class="post-item clearfix">
                    <div class="box_shadow mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Event Image -->
                            <div class="images">
                                <img src="{{ uploaded_asset($event->image) }}" 
                                     alt="{{ $event->name }}" class="img-fluid event-image " style="max-width: 30px; border-radius: 8px;">
                            </div>

                            <!-- Event Details -->
                            <div class="text_dates">
                                <h6>{{ $event->name }}</h6>
                                <small>{{ \Carbon\Carbon::parse($event->start_date)->format('M d, Y') }}</small>
                            </div>

                            <!-- View Button -->
                            <div class="button_view">
                                <a type="button" class="btn btn-primary btn-sm" href="{{ route('events.user_show', $event->id) }}">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-center">No events available at the moment.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

