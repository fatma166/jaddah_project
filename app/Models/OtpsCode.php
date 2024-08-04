<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OtpsCode
 * 
 * @property int $id
 * @property string $otp_code
 * @property string $phone
 * @property string $expire
 * @property int $student_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Student $student
 *
 * @package App\Models
 */
class OtpsCode extends Model
{
	protected $table = 'otps_codes';

	protected $casts = [
		'student_id' => 'int'
	];

	protected $fillable = [
		'otp_code',
		'phone',
		'expire',
		'student_id'
	];

	public function student()
	{
		return $this->belongsTo(Student::class);
	}
}
