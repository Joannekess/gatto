<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;

    protected $table = "symptoms";

    protected $fillable = [
        "name",
        "description"
    ];

    protected $guarded = [
        "id",
        "created_at",
        "updated_at"
    ];
}
