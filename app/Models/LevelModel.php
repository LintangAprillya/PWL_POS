<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'm_level'; //mendefinisikan nama tabel yg digunakan oleh model
    protected $primaryKey = 'level_id'; //mendefinisikan primary key dr tabel yg digunakan
    protected $fillable = ['level_id', 'level_kode', 'level_nama'];
    protected function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}