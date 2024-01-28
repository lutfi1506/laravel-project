<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeFilter($query , array $filters)
    {
        $query->when($filters['search'] ?? false ,function($query ,$search){
            return $query->where('nama', 'like', '%' . $search . '%')
                        ->orWhere('no_hp', 'like', '%' . $search . '%')
                        ->orWhere('tanggal', 'like', '%' . $search . '%');
        });
    }

    public function paket(): BelongsTo{
        return $this->belongsTo(Paket::class);
    }

    public function hutang(): BelongsTo{
        return $this->belongsTo(Hutangs::class);
    }
}
