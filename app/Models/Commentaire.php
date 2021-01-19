<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Port;
use App\Models\Ecrire;
use App\Models\Commentaire;

class Commentaire extends Model
{
    use HasFactory;

    protected $table = 'JM_mer_commentaire_port';
    protected $primaryKey = 'commentaire_port_commentaire_id';
    public $timestamps = false;

    protected $fillable = [
        'commentaire_port_lieu_id',
        'commentaire_port_commentaire',
        'commentaire_port_fichier',
    ];

    public function ports()
    {
        return $this->belongsTo(Port::class);
    }

    public function ecrire()
    {
        return $this->hasOne(Ecrire::class);
    }

    public function repondre()
    {
        return $this->hasMany(Commentaire::class);
    }
}
