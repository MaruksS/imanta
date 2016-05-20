<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Image;

class Album extends Model
{
	protected $table = 'albums';
	protected $fillable = [
	'name',
	'description',
	'cover_image'
	];

	public function Photos(){
		return $this->hasmany('App\Image');
	}
}
