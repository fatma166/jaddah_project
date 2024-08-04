<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AccessCode
 * 
 * @property int $id
 * @property string $code
 * @property int $status
 * @property int $book_id
 * @property int $student_id
 * @property int $access_id
 * @property Carbon $start_at
 * @property Carbon|null $expired_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Book $book
 *
 * @package App\Models
 */
class AccessCode extends Model
{
	use SoftDeletes;
	protected $table = 'access_codes';

	protected $casts = [
		'status' => 'int',
		'book_id' => 'int',
		'student_id' => 'int',
		'access_id' => 'int',
		'start_at' => 'datetime',
		'expired_date' => 'datetime'
	];

	protected $fillable = [
		'code',
		'status',
		'book_id',
		'student_id',
		'access_id',
		'start_at',
		'expired_date'
	];

	public function book()
	{
		return $this->belongsTo(Book::class);
	}
}
