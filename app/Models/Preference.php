<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Preference
 * 
 * @property int $id
 * @property int $cy_id
 * @property int $sem
 * @property int|null $status
 * @property int|null $flag
 * @property int|null $schedule
 * @property int|null $enlistment
 * @property Carbon|null $deadline
 * @property Carbon|null $gs_deadline
 * @property Carbon|null $com_deadline
 * @property Carbon|null $nstp_deadline
 * @property Carbon|null $enl_deadline
 * @property Carbon|null $gs_enl_deadline
 * @property Carbon|null $cad_deadline
 * @property Carbon|null $ac_deadline
 * @property int|null $admission
 *
 * @package App\Models
 */
class Preference extends Model
{
	protected $table = 'preferences';
	public $timestamps = false;

	protected $casts = [
		'cy_id' => 'int',
		'sem' => 'int',
		'status' => 'int',
		'flag' => 'int',
		'schedule' => 'int',
		'enlistment' => 'int',
		'admission' => 'int'
	];

	protected $dates = [
		'deadline',
		'gs_deadline',
		'com_deadline',
		'nstp_deadline',
		'enl_deadline',
		'gs_enl_deadline',
		'cad_deadline',
		'ac_deadline'
	];

	protected $fillable = [
		'cy_id',
		'sem',
		'status',
		'flag',
		'schedule',
		'enlistment',
		'deadline',
		'gs_deadline',
		'com_deadline',
		'nstp_deadline',
		'enl_deadline',
		'gs_enl_deadline',
		'cad_deadline',
		'ac_deadline',
		'admission'
	];
}
