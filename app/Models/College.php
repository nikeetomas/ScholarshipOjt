<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class College
 * 
 * @property int $id
 * @property string $college
 * @property string $collegeabbr
 *
 * @package App\Models
 */
class College extends Model
{
	protected $table = 'colleges';
	public $timestamps = false;

	protected $fillable = [
		'college',
		'collegeabbr'
	];
}
