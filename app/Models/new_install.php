<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class new_install extends Model
{
    use HasFactory;
    protected $fillable = [
        'sc_number',
        'office_name',
        'detail_end_cust',
        'wfm_start',
        'pic_office_name',
        'no_hp_pic',
        'product_diminta',
        'project_name',
        'bandwidth',
        'target_treg',
        'witel',
        'alamat',
        'longitude',
        'latitude',
        'petugas',
        'tgl_create',
        'status',
    ];
}