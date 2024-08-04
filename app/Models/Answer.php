<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Answer
 * 
 * @property int $id
 * @property int $question_id
 * @property string $answer
 * @property string $image
 * @property int $is_correct
 * 
 * @property Question $question
 *
 * @package App\Models
 */
class Answer extends Model
{
	protected $table = 'answers';
	public $timestamps = false;

	protected $casts = [
		'question_id' => 'int',
		'is_correct' => 'int'
	];

	protected $fillable = [
		'question_id',
		'answer',
		'image',
		'is_correct'
	];

	public function question()
	{
		return $this->belongsTo(Question::class);
	}
}
