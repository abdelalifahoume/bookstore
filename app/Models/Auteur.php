<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    use HasFactory;
     protected $fillable = [
        'nom',  
        'nationalite',
        'urlphoto',
     ];

    /**
     * Get all of the comments for the Auteur
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function livres()
    {
        return $this->hasMany(Livre::class);
    }
}
