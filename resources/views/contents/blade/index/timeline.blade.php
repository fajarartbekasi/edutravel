
<div class="container">
    

    @foreach($activities as $date => $activity)
        <div class="row">
            <h2>{{$date}}</h2>
        </div>
        @foreach($activity as $record)
            @include("contents.blade.index.activities.{$record->type}", ['activity' => $record])
        @endforeach
    @endforeach
    
    
</div>