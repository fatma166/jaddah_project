<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentGroup
 * 
 * @property int $id
 * @property int $group_id
 * @property int $student_id
 * @property Carbon $startdate
 * @property Carbon $enddate
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Department $department
 * @property Student $student
 *
 * @package App\Models
 */
class StudentGroup extends Model
{
	protected $table = 'student_groups';

	protected $casts = [
		'group_id' => 'int',
		'student_id' => 'int',
		'startdate' => 'datetime',
		'enddate' => 'datetime'
	];

	protected $fillable = [
		'group_id',
		'student_id',
		'startdate',
		'enddate'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'group_id');
	}

	public function student()
	{
		return $this->belongsTo(Student::class);
	}
}
