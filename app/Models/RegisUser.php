<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisUser extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function competition(){
        return $this->belongsTo(Competition::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function pnbdcproject(){
        return $this->hasOne(PnbdcProjects::class);
    }
}
