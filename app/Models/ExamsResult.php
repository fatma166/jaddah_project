<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ExamsResult
 * 
 * @property int $id
 * @property int $student_id
 * @property int $exam_id
 * @property int $mark
 * @property Carbon $date
 * @property int $percentage
 * @property int $full_mark
 * @property int $pass_degree
 *
 * @package App\Models
 */
class ExamsResult extends Model
{
	protected $table = 'exams_results';
	public $timestamps = false;

	protected $casts = [
		'student_id' => 'int',
		'exam_id' => 'int',
		'mark' => 'int',
		'date' => 'datetime',
		'percentage' => 'int',
		'full_mark' => 'int',
		'pass_degree' => 'int'
	];

	protected $fillable = [
		'student_id',
		'exam_id',
		'mark',
		'date',
		'percentage',
		'full_mark',
		'pass_degree'
	];
}
