<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Summary of Chirp
 */
class Chirp extends Model
{
    protected $fillable = [
        'message',
    ];
    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];
    use HasFactory;

    /**
     * Summary of user
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
