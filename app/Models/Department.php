<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 * 
 * @property int $id
 * @property int $college_id
 * @property string|null $department
 *
 * @package App\Models
 */
class Department extends Model
{
	protected $table = 'departments';
	public $timestamps = false;

	protected $casts = [
		'college_id' => 'int'
	];

	protected $fillable = [
		'college_id',
		'department'
	];
}
