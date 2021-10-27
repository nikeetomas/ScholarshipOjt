<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Degree
 * 
 * @property int $id
 * @property int $college_id
 * @property string $degree
 * @property string $abbr
 * @property int $type
 * @property int $years
 * @property int $active
 * @property int|null $admission
 * @property int|null $strand_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Degree extends Model
{
	protected $table = 'degrees';

	protected $casts = [
		'college_id' => 'int',
		'type' => 'int',
		'years' => 'int',
		'active' => 'int',
		'admission' => 'int',
		'strand_id' => 'int'
	];

	protected $fillable = [
		'college_id',
		'degree',
		'abbr',
		'type',
		'years',
		'active',
		'admission',
		'strand_id'
	];
}
