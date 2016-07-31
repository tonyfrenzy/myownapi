<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Maker extends Model
{
	protected $table = 'makers';

	protected $primaryKey = "serie";

	protected $fillable = [ 'color', 'power', 'capacity', 'speed'];

	protected $hidden = ['id', 'created_at', 'updated_at'];

	public function vehicles()
	{
		return $this->hasMany('App\Vehicle');
	}
}