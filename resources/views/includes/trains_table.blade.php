
<div class="container mt-5">
@forelse ($trains as $train)
<table class="table table-dark table-striped mt-3">
        <thead>
          <tr>
            <th scope="col">Company</th>
            <th scope="col">Departure Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Train Code</th>
            <th scope="col">Number Of Coaches</th>
            <th scope="col">On Time</th>
            <th scope="col">Cancelled</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $train->company }}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ $train->departure_time }}</td>
            <td>{{ $train->arrival_time }}</td>
            <td>{{ $train->train_code }}</td>
            <td>{{ $train->number_of_coaches }}</td>
            <td>{{ $train->is_on_time }}</td>
            <td>{{ $train->cancelled }}</td>
          </tr>
        </tbody>
      </table>
    

      @empty
   <h3 class="fs-1 text-center mt-5">No Trains available</h3>
 @endforelse
</div>



    



