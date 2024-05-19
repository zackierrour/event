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
                    <h2>Evenemnts</h2>
                    <p>Bienvenue sur votre tableau de bord. Profitez de l'interface conviviale pour gérer votre contenu en toute simplicité.</p>
                    <!-- Ajoutez ici d'autres éléments de votre tableau de bord -->

                    <div class="text-center mt-5">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            ajouter event
                          </button>
                    </div>
                    <div class="mt-3">
                        <table class="table">
                            <thead>

                                
                              <tr>
                                
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Lieu</th>
                                
                                <th scope="col">Prix</th>
                                <th scope="col">ticket disponibles</th>
                                <th>actions</th>
                              </tr>
                             

                            </thead>
                            <tbody>
                                @foreach($evenements as $event)
                              <tr>
                                <th scope="row">{{$event->id}}</th>
                                <td>  <img src="storage/images/{{$event->image}}" alt="" class="img-fluid me-2" style="width: 50px; height: 50px; border-radius: 3%;">{{$event->title}}</td>
                                <td>{{$event->description}} </td>
                                <td>{{$event->date}}</td>
                                <td>{{$event->lieu}}</td>
                                <td>{{$event->prix}} DH</td>
                                <td>{{$event->nbre_place}}</td>
                                <td class="d-flex">
                                    <form action="{{ route('deleteevenement', ['id' => $event->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>

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


    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="{{route('ajouterevent')}}" method="POST" enctype="multipart/form-data">
                @csrf 
            
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
            
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
            
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            
                <div class="form-group">
                    <label for="lieu">Lieu</label>
                    <input type="text" class="form-control" id="lieu" name="lieu" required>
                </div>
            
                <div class="form-group">
                    <label for="image">Image</label><br>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                    
                </div>
            
                <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="number" class="form-control" id="prix" name="prix" required>
                </div>
            
                <div class="form-group">
                    <label for="nbre_place">Nombre de places</label>
                    <input type="number" class="form-control" id="nbre_place" name="nbre_place" required>
                </div>
            
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
          
        </div>

      </div>
    </div>
  </div>

    <!-- Liens vers les fichiers JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
