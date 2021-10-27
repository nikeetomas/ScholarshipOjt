<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Enrollment
 * 
 * @property int $id
 * @property int $student_rec_id
 * @property string|null $section
 * @property int|null $pref_id
 * @property int|null $standing
 * @property int|null $status_id
 * @property int|null $scholarship_id
 * @property int $free_tuition
 * @property int|null $fee_sched_id
 * @property int|null $voluntary_contribution
 * @property string|null $updated_at
 * @property string|null $created_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Enrollment extends Model
{
	use SoftDeletes;
	protected $table = 'enrollments';

	protected $casts = [
		'student_rec_id' => 'int',
		'pref_id' => 'int',
		'standing' => 'int',
		'status_id' => 'int',
		'scholarship_id' => 'int',
		'free_tuition' => 'int',
		'fee_sched_id' => 'int',
		'voluntary_contribution' => 'int'
	];

	protected $fillable = [
		'student_rec_id',
		'section',
		'pref_id',
		'standing',
		'status_id',
		'scholarship_id',
		'free_tuition',
		'fee_sched_id',
		'voluntary_contribution'
	];
}
