@extends('layouts/main')

@section('content')

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">Company</th>
        <th scope="col">Departure Station</th>
        <th scope="col">Arrival Station</th>
        {{-- <th scope="col">Date</th> --}}
        <th scope="col">Departure Time</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Code</th>
        <th scope="col">Number of Coaches</th>
        <th scope="col">On Time</th>
        <th scope="col">Cancelled</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($filteredTrains as $singleTrain)

      <tr>
        <td>
        {{$singleTrain->company}}

        </td>
        <td>
            {{$singleTrain->departure_station}}

        </td>
        <td>
            {{$singleTrain->arrival_station}}

        </td>
        {{-- <td>
            {{$singleTrain->date}}

        </td> --}}
        <td>
            {{$singleTrain->departure_time}}

        </td>
        <td>
            {{$singleTrain->arrival_time}}

        </td>
        <td>
            {{$singleTrain->code}}

        </td>
        <td>
            {{$singleTrain->number_coaches}}

        </td>
        <td>
            @if ($singleTrain->on_time == 1)
            Yes
      @else
              No
      @endif
        </td>
        <td>
            @if ($singleTrain->cancelled == 1)
                Cancelled
            @else
                No
            @endif
        
        </td>

      </tr>
    @endforeach

    </tbody>
  </table>
    
@endsection