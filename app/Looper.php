<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Looper extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    protected $table = 'looper';

    public function CreatedBy()
    {
    	return $this->belongsTo('App\User','created_by');
    }
}
