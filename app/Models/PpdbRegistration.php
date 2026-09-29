<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpdbRegistration extends Model
{
    use HasFactory;

    protected $table = 'ppdb_registrations';

    protected $fillable = [
        'registration_number',
        'full_name',
        'nisn',
        'school_origin',
        'pathway_type',
        'major',
        'rapor_score',
        'parent_name',
        'phone',
        'address',
        'status',
        'admin_notes',
    ];
}
