<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Livre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Auteur()
    {
        return $this->belongsTo(Auteur::class);
    }

    public function Categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
