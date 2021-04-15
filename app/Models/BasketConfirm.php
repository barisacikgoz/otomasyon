<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BasketConfirm
 *
 * @property int $id
 * @property string $user_id
 * @property string $all_total_price
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BasketConfirm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BasketConfirm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BasketConfirm query()
 * @method static \Illuminate\Database\Eloquent\Builder|BasketConfirm whereAllTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasketConfirm whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasketConfirm whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasketConfirm whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasketConfirm whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BasketConfirm whereUserId($value)
 * @mixin \Eloquent
 */
class BasketConfirm extends Model
{
    use HasFactory;

    protected $guarded = [];
}
