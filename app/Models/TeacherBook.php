<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TeacherBook
 * 
 * @property int $id
 * @property int $teacher_id
 * @property int $book_id
 * @property int $publisher_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Book $book
 * @property Publisher $publisher
 * @property Teacher $teacher
 *
 * @package App\Models
 */
class TeacherBook extends Model
{
	protected $table = 'teacher_books';

	protected $casts = [
		'teacher_id' => 'int',
		'book_id' => 'int',
		'publisher_id' => 'int'
	];

	protected $fillable = [
		'teacher_id',
		'book_id',
		'publisher_id'
	];

	public function book()
	{
		return $this->belongsTo(Book::class);
	}

	public function publisher()
	{
		return $this->belongsTo(Publisher::class);
	}

	public function teacher()
	{
		return $this->belongsTo(Teacher::class);
	}
}
