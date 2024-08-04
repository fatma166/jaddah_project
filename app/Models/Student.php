<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Student
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $image
 * @property int $status
 * @property string|null $remember_token
 * @property Carbon|null $last_login
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|OtpsCode[] $otps_codes
 * @property Collection|StudentErrorlog[] $student_errorlogs
 * @property Collection|StudentGroup[] $student_groups
 * @property Collection|StudentProcess[] $student_processes
 * @property Collection|Question[] $questions
 *
 * @package App\Models
 */
class Student extends Model
{
	use SoftDeletes;
	protected $table = 'students';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'status' => 'int',
		'last_login' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'image',
		'status',
		'remember_token',
		'last_login'
	];

	public function otps_codes()
	{
		return $this->hasMany(OtpsCode::class);
	}

	public function student_errorlogs()
	{
		return $this->hasMany(StudentErrorlog::class);
	}

	public function student_groups()
	{
		return $this->hasMany(StudentGroup::class);
	}

	public function student_processes()
	{
		return $this->hasMany(StudentProcess::class);
	}

	public function questions()
	{
		return $this->belongsToMany(Question::class, 'students_questions_answers')
					->withPivot('id', 'answer', 'exam_id');
	}
}
