<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vote;
use App\Models\Commentaire;

class Port extends Model
{
    use HasFactory;

    protected $table = 'JM_mer_liste_port';
    protected $primaryKey = 'liste_port_lieu_id';
    public $timestamps = false;

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    public function votes(){
        return $this->hasMany(Vote::class);
    }
}
