<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentPd
 * 
 * @property int $id
 * @property int|null $student_id
 * @property int|null $cfat_id
 * @property int|null $mcat_id
 * @property string $fname
 * @property string $lname
 * @property string|null $mname
 * @property string $contact_number
 * @property string $status
 * @property Carbon $dob
 * @property string $pob
 * @property string $citizenship
 * @property bool $sex
 * @property int|null $gender
 * @property int|null $strand_id
 * @property int|null $indigenous_group_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class StudentPd extends Model
{
	protected $table = 'student_pds';

	protected $casts = [
		'student_id' => 'int',
		'cfat_id' => 'int',
		'mcat_id' => 'int',
		'sex' => 'bool',
		'gender' => 'int',
		'strand_id' => 'int',
		'indigenous_group_id' => 'int'
	];

	protected $dates = [
		'dob'
	];

	protected $fillable = [
		'student_id',
		'cfat_id',
		'mcat_id',
		'fname',
		'lname',
		'mname',
		'contact_number',
		'status',
		'dob',
		'pob',
		'citizenship',
		'sex',
		'gender',
		'strand_id',
		'indigenous_group_id'
	];
}
