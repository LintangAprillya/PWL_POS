<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BarangModel extends Model
{
    use HasFactory;

    protected $table = 'm_barangs'; //mendefiniskan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'barang_id'; //mendefiniskan primary key dari tabel yang digunakan

    protected $fillable =
        [
            'kategori_id',
            'barang_kode',
            'barang_nama',
            'harga_beli',
            'harga_jual',
            'image' //tambahan
        ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }


    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => url('/storage/posts/' . $image),
        );
    }
    // public function getBarangWithImage($id)
    // {
    //     $barang = BarangModel::with('transaksi')->find($id);

    //     return response()->json(['success' => true, 'barang' => $barang]);
    // }

}