<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelunasan extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mahasiswa_id','order_id','type', 'status','link_xendit'
    ];

    // protected $fillable = [
    //     'merchantOrderId','paymentMethod', 'status',
    // ];

    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
