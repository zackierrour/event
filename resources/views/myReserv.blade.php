<!DOCTYPE html>
<html lang="en">
@include ('layouts.head')

<body>
  @include ('layouts.nav')
  <div class="container">
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
          <td>{{$reservation->evenement->prix}} DH</td>
          <td>{{$reservation->status}}</td>

          <td>
            @if($reservation->status == 'accepter')
            <button class="btn btn-primary" onclick="printReservation({{$reservation->id}}, '{{$reservation->evenement->prix}}', '{{$reservation->evenement->type}}', '{{$reservation->evenement->title}}', '{{$reservation->status}}', '{{Auth::user()->name}}', '{{$reservation->evenement->image}}', '{{Auth::user()->email}}')">
              print
            </button>
            @endif

          </td>
          </tr>
          @endforeach
      </tbody>
    </table>

  </div>
    

  
  <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.3/dist/JsBarcode.all.min.js"></script>

  <script>
  function printReservation(id, prix, type, evenement, status, userName, image, userEmail) {
      // Generate a unique ticket code
      var ticketCode = 'TICKET-' + Date.now() + '-' + Math.floor(Math.random() * 10000);

      // Create an SVG element
      var svgElement = document.createElement('svg');

      // Generate the barcode and append it to the SVG element
      JsBarcode(svgElement, ticketCode, {format: "CODE128"});

      // Convert the SVG element to a data URL
      var barcodeDataUrl = svgElement.outerHTML;

      var printContents = `
  <!DOCTYPE html>
  <html>
  <head>
      <title>Reservation Ticket</title>
      <style>
          .img {
              width: 100%;
              height: 200px;
              object-fit: cover;
          }
          body {
              font-family: Arial, sans-serif;
              background-color: #f4f4f4;
              margin: 0;
              padding: 20px;
          }
          .ticket {
              background-color: white;
              border-radius: 10px;
              padding: 20px;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
              width: 300px;
              margin: auto;
          }
          h1 {
              color: blue;
              margin-top: 0;
          }
          p {
              margin-bottom: 10px;
          }
      </style>
  </head>
  <body>
      <div class="ticket">
          <h1>Mr. ${userName}</h1>
          <img src="storage/images/${image}" class="img" alt="event image">
          <p>Email: ${userEmail}</p>
          <p>Reservation ID: ${id}</p>
          <p>Event: ${evenement}</p>
          <p>Ticket Price: ${prix} DH</p>
          <p>Type: <span style="color:red; font-weight:bold;">${type}</span></p>
          <p>Status: ${status}</p>
          <p>Ticket Code: ${ticketCode}</p>
          <div style="width: 250px;">
            ${barcodeDataUrl}
            </div>
      </div>
  </body>
  </html>
  `;
  
      var myWindow = window.open('', '_blank');
      myWindow.document.write(printContents);
      myWindow.document.close();
      myWindow.focus();
      myWindow.print();
  }
  </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>   
</body>
</html>