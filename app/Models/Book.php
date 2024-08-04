<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book
 * 
 * @property int $id
 * @property string $title
 * @property string $auther
 * @property float $price
 * @property int $publisher_id
 * @property int $group_id
 * @property int $access_counts
 * @property string|null $deleted_at
 * 
 * @property Department $department
 * @property Publisher $publisher
 * @property Collection|AccessCode[] $access_codes
 * @property Collection|Exam[] $exams
 * @property Collection|Question[] $questions
 * @property Collection|Teacher[] $teachers
 *
 * @package App\Models
 */
class Book extends Model
{
	use SoftDeletes;
	protected $table = 'books';
	public $timestamps = false;

	protected $casts = [
		'price' => 'float',
		'publisher_id' => 'int',
		'group_id' => 'int',
		'access_counts' => 'int'
	];

	protected $fillable = [
		'title',
		'auther',
		'price',
		'publisher_id',
		'group_id',
		'access_counts'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'group_id');
	}

	public function publisher()
	{
		return $this->belongsTo(Publisher::class);
	}

	public function access_codes()
	{
		return $this->hasMany(AccessCode::class);
	}

	public function exams()
	{
		return $this->hasMany(Exam::class);
	}

	public function questions()
	{
		return $this->hasMany(Question::class);
	}

	public function teachers()
	{
		return $this->belongsToMany(Teacher::class, 'teacher_books')
					->withPivot('id', 'publisher_id')
					->withTimestamps();
	}
}
