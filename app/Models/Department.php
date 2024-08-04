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
 * Class Department
 * 
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property int $university_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property University $university
 * @property Collection|Book[] $books
 * @property Collection|Exam[] $exams
 * @property Collection|Notifaction[] $notifactions
 * @property Collection|Question[] $questions
 * @property Collection|StudentGroup[] $student_groups
 *
 * @package App\Models
 */
class Department extends Model
{
	use SoftDeletes;
	protected $table = 'departments';

	protected $casts = [
		'parent_id' => 'int',
		'university_id' => 'int'
	];

	protected $fillable = [
		'name',
		'parent_id',
		'university_id'
	];

	public function university()
	{
		return $this->belongsTo(University::class);
	}

	public function books()
	{
		return $this->hasMany(Book::class, 'group_id');
	}

	public function exams()
	{
		return $this->hasMany(Exam::class, 'group_id');
	}

	public function notifactions()
	{
		return $this->hasMany(Notifaction::class, 'group_id');
	}

	public function questions()
	{
		return $this->hasMany(Question::class, 'group_id');
	}

	public function student_groups()
	{
		return $this->hasMany(StudentGroup::class, 'group_id');
	}
}
