<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementController extends Controller
{
    //

    public function getEvenements(){
        $evenements = Evenement::all();

        return view('admin.evenements',compact('evenements'));
    }

    public function ajouterEvent(Request $request){

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'lieu' => 'required|string|max:255',
            
            'prix' => 'required|numeric',
            'nbre_place' => 'required|integer|min:1',
        ]);

        $event = new Evenement();
        $event->title = $request->input('title'); 
        $event->description = $request->input('description');
        $event->prix = $request->input('prix');
        $event->date = $request->input('date');
        $event->lieu = $request->input('lieu'); 
        $event->nbre_place = $request->input('nbre_place');
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images',$name);
            $event->image = $name;
        }
        $event->save();

        return redirect()->back()->with('success', 'Event added successfully');

    }

    public function deleteEvenement(Request $request, $id)
{
    $evenement = Evenement::find($id);
    $evenement->delete();
    return redirect()->back()->with('success', 'Événement supprimé avec succès.');
}

    
}
