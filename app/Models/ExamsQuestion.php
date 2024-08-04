<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamsQuestion
 * 
 * @property int $id
 * @property int $question_id
 * @property int $grade
 * @property int $ordering
 * @property int $exam_id
 * @property int $patent
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Exam $exam
 * @property Question $question
 *
 * @package App\Models
 */
class ExamsQuestion extends Model
{
	protected $table = 'exams_questions';

	protected $casts = [
		'question_id' => 'int',
		'grade' => 'int',
		'ordering' => 'int',
		'exam_id' => 'int',
		'patent' => 'int'
	];

	protected $fillable = [
		'question_id',
		'grade',
		'ordering',
		'exam_id',
		'patent'
	];

	public function exam()
	{
		return $this->belongsTo(Exam::class);
	}

	public function question()
	{
		return $this->belongsTo(Question::class);
	}
}
