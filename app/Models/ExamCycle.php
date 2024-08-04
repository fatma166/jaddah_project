<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamCycle
 * 
 * @property int $id
 * @property string $name
 * 
 * @property Collection|Exam[] $exams
 *
 * @package App\Models
 */
class ExamCycle extends Model
{
	protected $table = 'exam_cycles';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function exams()
	{
		return $this->hasMany(Exam::class);
	}
}
