<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table = "rules";

    protected $fillable = [
        "penyakit_id",
        "gejala_id",
        "CFValue"
    ];

    protected $guarded = [
        "id",
        "created_at",
        "updated_at"
    ];
    public $timestamps = true;
}
