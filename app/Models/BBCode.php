<?php

namespace App\Models;

use App\Models\Template;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BBCode extends Model
{
    use HasFactory;
    public $table = 'bbcode';
    protected $guarded = [];

    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class);
    }
}
