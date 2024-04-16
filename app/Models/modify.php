<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modify extends Model
{
    use HasFactory;
    protected $fillable = [
        'sc_number',
        'office_name',
        'detail_end_cust',
        'sid',
        'witel',
        'req_modify',
        'pic_office_name',
        'req_bandwidth',
        'wfm_start',
        'alamat',
        'longitude',
        'latitude',
        'tgl_create',
        'petugas',
        'status',
    ];
}
