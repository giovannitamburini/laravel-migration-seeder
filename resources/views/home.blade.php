@extends('layouts/main')

@section('content')

<ul>
    @foreach ($trains as $singleTrain)
    
    <li class="d-flex no-wrap gap-2">
        <div>{{$singleTrain->company}}</div>
        <div>{{$singleTrain->departure_station}}</div>
        <div>{{$singleTrain->arrival_station}}</div>
        <div>{{$singleTrain->date}}</div>
        <div>{{$singleTrain->departure_time}}</div>
        <div>{{$singleTrain->arrival_time}}</div>
        <div>{{$singleTrain->code}}</div>
        <div>{{$singleTrain->number_coaches}}</div>
        <div>
        @if ($singleTrain->on_time == 1)
              Yes
        @else
                No
        @endif
        </div>
        <div>
            @if ($singleTrain->cancelled == 1)
                Cancelled
            @else
                No
            @endif
        </div>
    </li>
    
    @endforeach
</ul>
    
@endsection