<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Question
 * 
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property string $title
 * @property string $image
 * @property string $video
 * @property int $group_id
 * @property string $question_type
 * @property int $book_id
 * @property int $teacher_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Book $book
 * @property Department $department
 * @property Teacher $teacher
 * @property Collection|Answer[] $answers
 * @property Collection|Exam[] $exams
 * @property Collection|Student[] $students
 *
 * @package App\Models
 */
class Question extends Model
{
	protected $table = 'questions';

	protected $casts = [
		'parent_id' => 'int',
		'group_id' => 'int',
		'book_id' => 'int',
		'teacher_id' => 'int'
	];

	protected $fillable = [
		'name',
		'parent_id',
		'title',
		'image',
		'video',
		'group_id',
		'question_type',
		'book_id',
		'teacher_id'
	];

	public function book()
	{
		return $this->belongsTo(Book::class);
	}

	public function department()
	{
		return $this->belongsTo(Department::class, 'group_id');
	}

	public function teacher()
	{
		return $this->belongsTo(Teacher::class);
	}

	public function answers()
	{
		return $this->hasMany(Answer::class);
	}

	public function exams()
	{
		return $this->belongsToMany(Exam::class, 'exams_questions')
					->withPivot('id', 'grade', 'ordering', 'patent')
					->withTimestamps();
	}

	public function students()
	{
		return $this->belongsToMany(Student::class, 'students_questions_answers')
					->withPivot('id', 'answer', 'exam_id');
	}
}
