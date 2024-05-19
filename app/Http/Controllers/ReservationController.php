<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Evenement;

class ReservationController extends Controller
{

    public function getReservations(){
        $reservations = Reservation::with(['evenement','user'])->get();

        return view('admin.reservations',compact('reservations'));
    }





    public function ajouterReservation(Request $request)
    {

        $evenement_id = $request->input('evenement_id');
        $user_id = auth()->user()->id;

        // Créer une nouvelle réservation
        $reservation = new Reservation();
        $reservation->evenement_id = $evenement_id;
        $reservation->user_id = $user_id;
        $reservation->status='attent';
        $reservation->save();

        // Mettre à jour le nombre de places disponibles dans la table des événements
        $evenement = Evenement::find($evenement_id);
        if ($evenement) {
            // Décrémenter le nombre de places disponibles
            $evenement->nbre_place--;
            $evenement->save();
        }

        return redirect()->back()->with('success', 'Réservation effectuée.');
    }

    public function myReservation() {
        $reservations = Reservation::where('user_id', auth()->user()->id)->with('evenement')->get();
        return view('myReserv', compact('reservations'));
    }
}

