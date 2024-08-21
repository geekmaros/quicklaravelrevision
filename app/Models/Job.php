<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // protected $table role here is to specify the table name
    protected $table = 'job_listings';

    // protected $fillable role here is to
    // protect against mass assignment vulnerabilities
    protected $fillable = [
        'title',
        'salary',
    ];
}
