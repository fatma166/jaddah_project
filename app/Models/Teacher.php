<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Teacher
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string $image
 * @property int $status
 * @property string|null $remember_token
 * @property int $role_id
 * @property int $university_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property TeacherRole $teacher_role
 * @property University $university
 * @property Collection|Exam[] $exams
 * @property Collection|Question[] $questions
 * @property Collection|Book[] $books
 *
 * @package App\Models
 */
class Teacher extends Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
	use SoftDeletes;
	protected $table = 'teachers';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'status' => 'int',
		'role_id' => 'int',
		'university_id' => 'int'
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
		'role_id',
		'university_id'
	];

	public function teacher_role()
	{
		return $this->belongsTo(TeacherRole::class, 'role_id');
	}

	public function university()
	{
		return $this->belongsTo(University::class);
	}

	public function exams()
	{
		return $this->hasMany(Exam::class);
	}

	public function questions()
	{
		return $this->hasMany(Question::class);
	}

	public function books()
	{
		return $this->belongsToMany(Book::class, 'teacher_books')
					->withPivot('id', 'publisher_id')
					->withTimestamps();
	}
}
