<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentModel extends Model{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'student_table';

    protected $fillable = [
        'id',
        'nim',
        'nik',
        'name',
        'dob',
        'gender',
        'address',
        'phone_number',
        'email',
        'status',
        'created_at',
        'updated_at',
        'deleted'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


    public function getCreatedAtFormattedAttribute(){
        return $this->created_at ? $this->created_at->format('d M Y H:i') : null;
    }

    public function getUpdatedAtFormattedAttribute(){
        return $this->updated_at ? $this->updated_at->format('d M Y H:i') : null;
    }
}
