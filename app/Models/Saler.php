<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saler extends Model
{
    use HasFactory;
    protected $fillable = ['total_sales','ticket_owner_id'];
}
