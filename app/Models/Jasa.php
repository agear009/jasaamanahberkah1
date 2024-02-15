<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'condition',
        'price',
        'benefit',
        'process1',
        'process2',
        'process3',
        'process4',
        'process5',
        'process6',
        'process7',
        'process8',
        'process9',
        'process10',
    ];
}
