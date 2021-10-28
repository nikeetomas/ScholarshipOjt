<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ScholarshipDetail
 * 
 * @property int $id
 * @property int $scholarship_id
 * @property string $appli_poli
 * @property string $qualification
 * @property string $amount_of_grant
 * @property string $gen_guideline
 * @property string $contact_info
 *
 * @package App\Models
 */
class ScholarshipDetail extends Model
{
	protected $table = 'scholarship_details';
	public $timestamps = false;

	protected $casts = [
		'scholarship_id' => 'int'
	];

	protected $fillable = [
		'scholarship_id',
		'appli_poli',
		'qualification',
		'amount_of_grant',
		'gen_guideline',
		'contact_info'
	];
}
