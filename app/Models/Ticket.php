<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory,Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=[];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     protected $fillable = [
        'id', 'keluhan','image','tingkat_kesulitan','created_at','tempat', "status_ticket", "keterangan", "user_id","divisi"
     ];

/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'keluhan', 'status_ticket'
    ];
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }

   
   
}
