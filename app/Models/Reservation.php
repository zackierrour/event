<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Evenement;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'evenement_id',
        'status',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function evenement() {
        return $this->belongsTo(Evenement::class);
    }
}
