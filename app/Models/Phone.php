<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones';
    protected $primaryKey = 'id_phone';
    public $timestamps = false;
    protected $with = ['user'];
    protected $fillable = ['id_user', 'no_telp'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
