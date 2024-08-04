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
 * Class University
 * 
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property string $email
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Department[] $departments
 * @property Collection|StudentErrorlog[] $student_errorlogs
 * @property Collection|Teacher[] $teachers
 *
 * @package App\Models
 */
class University extends Model
{
	use SoftDeletes;
	protected $table = 'universities';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'address',
		'email',
		'status'
	];

	public function departments()
	{
		return $this->hasMany(Department::class);
	}

	public function student_errorlogs()
	{
		return $this->hasMany(StudentErrorlog::class);
	}

	public function teachers()
	{
		return $this->hasMany(Teacher::class);
	}
}
