<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Scholarship
 * 
 * @property int $id
 * @property int $scholarship_type
 * @property string $scholarship
 * @property float $discount
 * @property string $sem_charged
 * @property string $funded_by
 * @property int $chargedfull
 * @property int|null $active
 *
 * @package App\Models
 */
class Scholarship extends Model
{
	protected $table = 'scholarships';
	public $timestamps = false;

	protected $casts = [
		'scholarship_type' => 'int',
		'discount' => 'float',
		'chargedfull' => 'int',
		'active' => 'int'
	];

	protected $fillable = [
		'scholarship_type',
		'scholarship',
		'discount',
		'sem_charged',
		'funded_by',
		'chargedfull',
		'active'
	];
}
