<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'ip',
        'userName',
        'password',
        'sshPort',
        'state',
    ];

    public function notifications(){
        return $this->hasMany(Notification::class);
    }
}
