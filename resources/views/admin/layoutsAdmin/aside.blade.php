<div class="col-md-3">
    <!-- Menu latéral -->
    <div class="sidebar">
        <h2>hello {{auth()->user()->name}}</h2>
        <ul class="list-unstyled">
            <li><a href="{{route('dashboard')}}">Statistiques</a></li>
            <li><a href="{{route('evenements')}}">evenements</a></li>
            <li><a href="{{route('reservations')}}">reservation</a></li>
            <li><a href="#">utilisateurs</a></li>
            <li><a href="#">Déconnexion</a></li>
        </ul>
    </div>
</div>