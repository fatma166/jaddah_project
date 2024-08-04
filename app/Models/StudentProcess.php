<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentProcess
 * 
 * @property int $id
 * @property Carbon $process_time
 * @property string $message
 * @property string $type
 * @property int $student_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Student $student
 *
 * @package App\Models
 */
class StudentProcess extends Model
{
	protected $table = 'student_processes';

	protected $casts = [
		'process_time' => 'datetime',
		'student_id' => 'int'
	];

	protected $fillable = [
		'process_time',
		'message',
		'type',
		'student_id'
	];

	public function student()
	{
		return $this->belongsTo(Student::class);
	}
}
