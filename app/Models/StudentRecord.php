<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentRecord
 * 
 * @property int $id
 * @property int $student_id
 * @property int|null $college_id
 * @property int $degree_id
 * @property int $curricula_id
 * @property int|null $ay_id
 * @property string|null $remarks
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class StudentRecord extends Model
{
	protected $table = 'student_records';

	protected $casts = [
		'student_id' => 'int',
		'college_id' => 'int',
		'degree_id' => 'int',
		'curricula_id' => 'int',
		'ay_id' => 'int'
	];

	protected $fillable = [
		'student_id',
		'college_id',
		'degree_id',
		'curricula_id',
		'ay_id',
		'remarks'
	];
}
