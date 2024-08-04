<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentErrorlog
 * 
 * @property int $id
 * @property string $action
 * @property string $description
 * @property int $student_id
 * @property int $university_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Student $student
 * @property University $university
 *
 * @package App\Models
 */
class StudentErrorlog extends Model
{
	protected $table = 'student_errorlogs';

	protected $casts = [
		'student_id' => 'int',
		'university_id' => 'int'
	];

	protected $fillable = [
		'action',
		'description',
		'student_id',
		'university_id'
	];

	public function student()
	{
		return $this->belongsTo(Student::class);
	}

	public function university()
	{
		return $this->belongsTo(University::class);
	}
}
