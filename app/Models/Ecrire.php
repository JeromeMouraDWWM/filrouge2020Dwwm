<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Commentaire;

class Ecrire extends Model
{
    use HasFactory;

    protected $table = 'JM_mer_ecrire_port';
    protected $primaryKey = 'ecrire_port_id';
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function commentaires()
    {
        return $this->belongsTo(Commentaire::class);
    }

}
