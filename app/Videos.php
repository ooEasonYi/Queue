<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
	public $table = 'videos';
	public $primarykey = 'id';
	// protected $dateFormat = 'U';
    protected $fillable = ['id','title', 'keywords','userid','localPath','remotePath','status','beginDate','endDate'];
    
}
