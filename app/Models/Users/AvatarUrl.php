<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 06 Aug 2018 02:29:28 +0000.
 */

namespace App\Models\Users;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class AvatarUrl
 * 
 * @property int $user_id
 * @property string $url
 * @property int $delete_flg
 *
 * @package App\Models
 */
class AvatarUrl extends Eloquent
{
	protected $table = 'avatar_url';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'delete_flg' => 'int'
	];

	protected $fillable = [
		'user_id',
		'url',
		'delete_flg'
	];
}
