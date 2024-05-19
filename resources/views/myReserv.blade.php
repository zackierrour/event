<!DOCTYPE html>
<html lang="en">
@include ('layouts.head')

<body>
    @include ('layouts.nav')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name Event</th>
            <th scope="col">Prix</th>
            <th scope="col">Statu</th>   
            <th scope="col">Print</th>
          </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
            <th scope="row">{{$reservation->id}}</th>
            <td>{{$reservation->evenement->title}}</td>
            <td>{{$reservation->evenement->prix}}</td>
            <td>{{$reservation->status}}</td>

            <td></td>
            </tr>
            @endforeach
        </tbody>
      </table>












<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
</body>