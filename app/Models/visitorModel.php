<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitorModel extends Model{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'visitor_table';

    protected $fillable = [
        'id',
        'id_card',
        'name',
        'phone_number',
        'email',
        'created_at',
        'updated_at'
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
