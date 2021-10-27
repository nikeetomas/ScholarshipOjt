<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ScholarshipDeduction
 * 
 * @property int $id
 * @property int $scholarship_id
 * @property int $fund_id
 * @property float $percent
 * @property string $fund
 *
 * @package App\Models
 */
class ScholarshipDeduction extends Model
{
	protected $table = 'scholarship_deductions';
	public $timestamps = false;

	protected $casts = [
		'scholarship_id' => 'int',
		'fund_id' => 'int',
		'percent' => 'float'
	];

	protected $fillable = [
		'scholarship_id',
		'fund_id',
		'percent',
		'fund'
	];
}
