
<div class="container">

    @foreach($activities as $date => $activity)

        <div class="row">

            <h2> {{$date}} </h2>

        </div>

        @forelse($activity as $record)

            @if(view()->exists("contents.blade.index.activities.{$record->type}"))

                @include("contents.blade.index.activities.{$record->type}", ['activity' => $record])

            @endif
        @empty

            <p>There is no activity for this user yet.</p>

        @endforelse

    @endforeach
    
</div>