<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Port;

class Vote extends Model
{
    use HasFactory;

    protected $table = 'JM_mer_vote_port';
    protected $primaryKey = 'vote_port_id';
    public $timestamps = false;

    protected $fillable = [
        'vote_port_value',
        'vote_port_user',
        'vote_port_location',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function ports()
    {
        return $this->belongsTo(Port::class);
    }
}
