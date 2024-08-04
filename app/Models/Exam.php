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
 * Class Exam
 * 
 * @property int $id
 * @property string $title
 * @property string|null $details
 * @property int $active
 * @property int $book_id
 * @property Carbon $minutes
 * @property int $type_id
 * @property Carbon $start_date
 * @property Carbon|null $end_date
 * @property int $teacher_id
 * @property int $degree
 * @property int $pass_degree
 * @property int $question_count
 * @property int $group_id
 * @property int $exam_cycle_id
 * @property int $tries
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Book $book
 * @property ExamCycle $exam_cycle
 * @property Department $department
 * @property Teacher $teacher
 * @property ExamType $exam_type
 * @property Collection|Question[] $questions
 * @property Collection|StudentsQuestionsAnswer[] $students_questions_answers
 *
 * @package App\Models
 */
class Exam extends Model
{
	use SoftDeletes;
	protected $table = 'exams';

	protected $casts = [
		'active' => 'int',
		'book_id' => 'int',
		'minutes' => 'datetime',
		'type_id' => 'int',
		'start_date' => 'datetime',
		'end_date' => 'datetime',
		'teacher_id' => 'int',
		'degree' => 'int',
		'pass_degree' => 'int',
		'question_count' => 'int',
		'group_id' => 'int',
		'exam_cycle_id' => 'int',
		'tries' => 'int'
	];

	protected $fillable = [
		'title',
		'details',
		'active',
		'book_id',
		'minutes',
		'type_id',
		'start_date',
		'end_date',
		'teacher_id',
		'degree',
		'pass_degree',
		'question_count',
		'group_id',
		'exam_cycle_id',
		'tries'
	];

	public function book()
	{
		return $this->belongsTo(Book::class);
	}

	public function exam_cycle()
	{
		return $this->belongsTo(ExamCycle::class);
	}

	public function department()
	{
		return $this->belongsTo(Department::class, 'group_id');
	}

	public function teacher()
	{
		return $this->belongsTo(Teacher::class);
	}

	public function exam_type()
	{
		return $this->belongsTo(ExamType::class, 'type_id');
	}

	public function questions()
	{
		return $this->belongsToMany(Question::class, 'exams_questions')
					->withPivot('id', 'grade', 'ordering', 'patent')
					->withTimestamps();
	}

	public function students_questions_answers()
	{
		return $this->hasMany(StudentsQuestionsAnswer::class);
	}
}
