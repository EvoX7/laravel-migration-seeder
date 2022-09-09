
<div class="container">


@forelse ($trains as $train)
<table class="text-center mb-3 mt-5">
  <tr>
    <th>Company</th>
    <th>Departure Station</th>
    <th>Arrival Station</th>
    <th>Departure Time</th>
    <th>Arrival Time</th>
    <th>Train Code</th>
    <th>Number Of Coaches</th>
    <th>On Time</th>
    <th>Cancelled</th>
   

    
  </tr>
  <tr>
    <td>{{ $train->company }}</td>
    <td>{{ $train->departure_station }}</td>
    <td>{{ $train->arrival_station }}</td>
    <td>{{ $train->departure_time }}</td>
    <td>{{ $train->arrival_time  }}</td>
    <td>{{ $train->train_code }}</td>
    <td>{{ $train->number_of_coaches }}</td>
    <td>{{ $train->is_on_time }}</td>
    <td>{{ $train->cancelled }}</td>
  </tr>

</table>
@empty
   <h3 class="fs-1 text-center mt-5">No Trains available</h3>
 @endforelse

</div>