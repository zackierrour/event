<!DOCTYPE html>
<html lang="en">
@include ('layouts.head')
<style>
  .event-card {
      border: 1px solid #ddd;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
  }

  .event-card:hover {
      transform: translateY(-5px);
  }

  .event-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
  }

  .card-body {
      padding: 20px;
  }

  .card-title {
      font-size: 1.5rem;
      margin-bottom: 10px;
  }

  .card-text {
      color: #666;
      margin-bottom: 15px;
  }

  .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
  }

  .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
  }

  .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
  }

  .btn-secondary:hover {
      background-color: #5a6268;
      border-color: #5a6268;
  }
</style>
<body>
    @include ('layouts.nav')

    <div  id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://github.com/Zakaria-Kharroub/Eventopia/blob/main/public/images/carousel-3.jpg?raw=true" class="d-block w-100" alt="..." height="750px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://github.com/Zakaria-Kharroub/Eventopia/blob/main/public/images/carousel-2.jpg?raw=true" class="d-block w-100 " alt="..." height="750px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://github.com/Zakaria-Kharroub/Eventopia/blob/main/public/images/carousel-1.jpg?raw=true" class="d-block w-100" alt="..."height="750px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="container mt-5 mb-5">
  <h1 class="text-center">Nos Événements</h1>

  <div class="row row-cols-1 row-cols-md-3 g-4">

      @foreach($events as $event)
      <div class="col">
          <div class="card event-card">
              <img src="storage/images/{{$event->image}}" class="card-img-top event-image" alt="Palm Springs Road">
              <div class="card-body">
                  <h5 class="card-title">{{$event->title}}</h5>
                  <p class="card-text">{{ \Carbon\Carbon::parse($event->created_at)->diffForHumans() }}</p>
                  <p class="card-text">{{$event->description}}</p>
                  <p class="card-text">Date: {{$event->date}}</p>
                  <p class="card-text">Lieu: {{$event->lieu}}</p>
                  <p class="card-text">Prix: {{$event->prix}}</p>
                  <p class="card-text">Nombre de Ticket: {{$event->nbre_place}}</p>

                  <div class="d-flex justify-content-between align-items-center">
                      <form action="{{route('ajouterreservation')}}" method="POST">
                          @csrf
                          <input type="hidden" name="evenement_id" value="{{$event->id}}">
                          <button type="submit" class="btn btn-primary">Réserver</button>
                      </form>
                      <button class="btn btn-secondary">Voir Détails</button>
                  </div>
              </div>
          </div>
      </div>
      @endforeach

  </div>

</div>












<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
</body>
</html>