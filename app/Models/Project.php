<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = true;

    protected $casts = [
        'age' => 'float'
    ];

    protected $fillable = [
        'id' => 'required',
        'name' => 'required',
        'age' => 'required',
        'type' => 'required'
    ];
    public function getUserID()
    {
        return sprintf('Comp-%03d', $this->id);
    }

}
