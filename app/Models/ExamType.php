<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamType
 * 
 * @property int $id
 * @property string $type
 * @property string $ar_name
 * 
 * @property Collection|Exam[] $exams
 *
 * @package App\Models
 */
class ExamType extends Model
{
	protected $table = 'exam_types';
	public $timestamps = false;

	protected $fillable = [
		'type',
		'ar_name'
	];

	public function exams()
	{
		return $this->hasMany(Exam::class, 'type_id');
	}
}
