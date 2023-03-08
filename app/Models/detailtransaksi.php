<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;
use App\Models\Member;
use App\Models\Paket;

class detailtransaksi extends Model
{
    use HasFactory;

    protected $table = 'detailtransaksi';
    protected $fillable = [
        'id_transaksi','id_paket','qty','keterangan'
    ];
    
    public function Transaksi()
    {
        return $this->belongsTo('App\Models\Member', 'id_transaksi', 'id');
    }
    public function Paket()
    {
        return $this->belongsTo('App\Models\Paket', 'id_paket', 'id');
    }
}
