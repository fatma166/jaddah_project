<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TeacherRole
 * 
 * @property int $id
 * @property string $position
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Teacher[] $teachers
 *
 * @package App\Models
 */
class TeacherRole extends Model
{
	protected $table = 'teacher_roles';

	protected $fillable = [
		'position'
	];

	public function teachers()
	{
		return $this->hasMany(Teacher::class, 'role_id');
	}
}
