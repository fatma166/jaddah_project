<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Notifaction
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property int $status
 * @property string $target
 * @property int|null $group_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Department|null $department
 *
 * @package App\Models
 */
class Notifaction extends Model
{
	protected $table = 'notifactions';

	protected $casts = [
		'status' => 'int',
		'group_id' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'image',
		'status',
		'target',
		'group_id'
	];

	public function department()
	{
		return $this->belongsTo(Department::class, 'group_id');
	}
}
