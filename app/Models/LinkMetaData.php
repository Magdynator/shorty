<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkMetaData extends Model
{
    use HasFactory;
    protected $fillable = ['visits_count', 'link_id'];

}
