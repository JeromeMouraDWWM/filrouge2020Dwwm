<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commentaire;

class Repondre extends Model
{
    use HasFactory;

    protected $table = 'JM_mer_repondre_port';
    protected $primaryKey = 'repondre_port_id';
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(Commentaire::class);
    }
}
