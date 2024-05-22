<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <!-- Liens vers les fichiers CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        /* Styles personnalisés */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            height: 100vh; /* Remplace la hauteur */
        }
        .sidebar h2 {
            margin-bottom: 30px;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .sidebar ul {
            padding: 0;
            list-style: none;
        }
        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            transition: all 0.3s ease;
        }
        .sidebar ul li a:hover {
            background-color: #4e545b;
            border-left: 4px solid #ffc107;
            padding-left: 16px;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #007bff;
        }
        .content p {
            font-size: 18px;
            line-height: 1.6;
        }
    </style>
</head>
<body>



    <div class="container-fluid">
        <div class="row">
            @include('admin.layoutsAdmin.aside')
            <div class="col-md-9">
                <!-- Contenu principal -->
                <div class="content">
                    <h2>Reservation</h2>
                    

                    
                    <div class="mt-3">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Name Event</th>
                                <th scope="col">Usrname</th>   
                                <th scope="col">Prix</th>
                                <th scope="col">Statu</th>   
                                <th scope="col">accepter</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $reservation)
                                <tr>
                                <th scope="row">{{$reservation->id}}</th>
                                <td>{{$reservation->evenement->title}}</td>
                                <td>{{$reservation->user->name}}</td>
                    
                                <td>{{$reservation->evenement->prix}}</td>
                            
                                <td>{{$reservation->status}}</td>
                    
                                <td>
                                    @if($reservation->status == 'accepter')
                                    <button class="btn btn-warning" type="button" disabled>Accepted"</button>
                                    @else
                                    <form action="{{route('updatestatus',$reservation->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-success">Accepter</button>
                                        <input type="hidden" name="status" value="accepter">  
                                    </form>
                                    @endif

                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                    

                    </div>

                </div>
            </div>
        </div>
    </div>







    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name Event</th>
            <th scope="col">Usrname</th>   
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
            <td>{{$reservation->user->name}}</td>

            <td>{{$reservation->evenement->prix}}</td>
        
            <td>{{$reservation->status}}</td>

            <td></td>
            </tr>
            @endforeach
        </tbody>
      </table>


 




    <!-- Liens vers les fichiers JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
