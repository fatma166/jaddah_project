<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Publisher
 * 
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $description
 * @property string $email
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Book[] $books
 * @property Collection|TeacherBook[] $teacher_books
 *
 * @package App\Models
 */
class Publisher extends Model
{
	use SoftDeletes;
	protected $table = 'publishers';

	protected $casts = [
		'status' => 'int'
	];

	protected $fillable = [
		'name',
		'phone',
		'description',
		'email',
		'status'
	];

	public function books()
	{
		return $this->hasMany(Book::class);
	}

	public function teacher_books()
	{
		return $this->hasMany(TeacherBook::class);
	}
}
