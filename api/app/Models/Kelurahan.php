<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'kelurahan';
	protected $primaryKey = 'id';
	protected $fillable = ['kec_id','kel_nama','kel_alamat','kel_geomtri'];

    public function kecamatan()
    {
    	return $this->belongsTo('App\Models\Kecamatan');
    }

    public function menara()
    {
    	return $this->hasMany('App\Models\Menara','kel_id','id');
    }
}