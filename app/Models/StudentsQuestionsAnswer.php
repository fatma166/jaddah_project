<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentsQuestionsAnswer
 * 
 * @property int $id
 * @property int $question_id
 * @property int $student_id
 * @property string $answer
 * @property int $exam_id
 * 
 * @property Exam $exam
 * @property Question $question
 * @property Student $student
 *
 * @package App\Models
 */
class StudentsQuestionsAnswer extends Model
{
	protected $table = 'students_questions_answers';
	public $timestamps = false;

	protected $casts = [
		'question_id' => 'int',
		'student_id' => 'int',
		'exam_id' => 'int'
	];

	protected $fillable = [
		'question_id',
		'student_id',
		'answer',
		'exam_id'
	];

	public function exam()
	{
		return $this->belongsTo(Exam::class);
	}

	public function question()
	{
		return $this->belongsTo(Question::class);
	}

	public function student()
	{
		return $this->belongsTo(Student::class);
	}
}
