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
 * Class Conversation
 * 
 * @property int $id
 * @property int $sender_id
 * @property string $sender_type
 * @property string $receiver_id
 * @property int $last_message_id
 * @property Carbon $last_message_time
 * @property int $unread_meassage_count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Message[] $messages
 *
 * @package App\Models
 */
class Conversation extends Model
{
	use SoftDeletes;
	protected $table = 'conversations';

	protected $casts = [
		'sender_id' => 'int',
		'last_message_id' => 'int',
		'last_message_time' => 'datetime',
		'unread_meassage_count' => 'int'
	];

	protected $fillable = [
		'sender_id',
		'sender_type',
		'receiver_id',
		'last_message_id',
		'last_message_time',
		'unread_meassage_count'
	];

	public function messages()
	{
		return $this->hasMany(Message::class);
	}
}
