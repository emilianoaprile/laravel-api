<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    
    // aggiungere ai model Type e Project i metodi per definire la relazione one to many (hasMany e belongsTo)
    protected $fillable = ['name', 'slug'];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}

