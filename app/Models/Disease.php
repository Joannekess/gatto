<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $table = "diseases";

    protected $fillable = [
        "name",
        "description"
    ];

    protected $guarded = [
        "id",
        "created_at",
        "updated_at"
    ];
    public $timestamps = true;
}
