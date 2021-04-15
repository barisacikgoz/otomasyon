<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Basket
 *
 * @property int $id
 * @property string $user_id
 * @property string $stock_note
 * @property string $stock_code
 * @property string $amount
 * @property string $price
 * @property string $total_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket query()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereStockCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereStockNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUserId($value)
 * @mixin \Eloquent
 */
class Basket extends Model
{
    use HasFactory;

    protected $guarded = [];
}
