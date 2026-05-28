<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['title', 'description', 'image', 'event_date'])]
class Event extends Model
{
    use HasFactory;

    protected function casts(): array
    {
        return [
            'event_date' => 'date',
        ];
    }
}
