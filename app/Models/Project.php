<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "project_leader_name",
        "project_leader_surname",
        "people",
        "date_start",
        "duration",
        "description",
        "price"
        ];
}
