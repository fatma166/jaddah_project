<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Message
 * 
 * @property int $id
 * @property int $conversation_id
 * @property int $sender_id
 * @property string $message
 * @property string|null $file
 * @property int $is_seen
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Conversation $conversation
 *
 * @package App\Models
 */
class Message extends Model
{
	use SoftDeletes;
	protected $table = 'messages';

	protected $casts = [
		'conversation_id' => 'int',
		'sender_id' => 'int',
		'is_seen' => 'int'
	];

	protected $fillable = [
		'conversation_id',
		'sender_id',
		'message',
		'file',
		'is_seen'
	];

	public function conversation()
	{
		return $this->belongsTo(Conversation::class);
	}
}
