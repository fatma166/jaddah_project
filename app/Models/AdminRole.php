<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdminRole
 * 
 * @property int $id
 * @property string $name
 * @property string $modules
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Admin[] $admins
 *
 * @package App\Models
 */
class AdminRole extends Model
{
	protected $table = 'admin_roles';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'modules',
		'status'
	];

	public function admins()
	{
		return $this->hasMany(Admin::class, 'role_id');
	}
}
