<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;
    // �A�v���P�[�V��������create�Ȃǂł��Ȃ��l���L�q����
  // ���ȉ��̏������L�q

    protected $guarded = [
    'id',
    'created_at',
    'updated_at',
    ];
    // ���ǉ�
    public static function getAllOrderByUpdated_at()
    {
    return self::orderBy('updated_at', 'desc')->get();
    }
     // ���ǉ�
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // ���ǉ�
    public function users()
    {
    return $this->belongsToMany(User::class)->withTimestamps();
    }
}
