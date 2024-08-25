<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listings_id');
    }
}
