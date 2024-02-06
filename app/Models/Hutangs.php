<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hutangs extends Model
{
    use HasFactory;

    

    protected $guarded = ['id'];

    public static function search($field,$search)
    {
        return Hutangs::where($field, '=',$search);
    }

    public function list(): HasMany{
        return $this->hasMany(History::class);
    }
    public static function cek()
    {
        foreach(Hutangs::all() as $hutang){
            if ($hutang->list->count() == 0) {
                Hutangs::destroy($hutang->id);
            }
        }
    }
}
