<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cy
 * 
 * @property int $id
 * @property string $cy
 *
 * @package App\Models
 */
class Cy extends Model
{
	protected $table = 'cys';
	public $timestamps = false;

	protected $fillable = [
		'cy'
	];
}
