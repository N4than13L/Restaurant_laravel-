<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Client;
use App\Models\Menu;

class Table extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tables';

    protected $fillable = [
        'id',
        'name',
        'clients_id',
        'users_id',
        'menus_id',

    ];

    // relacion de muchos a uno.
    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    // relacion de muchos a uno.
    public function clients()
    {
        return $this->belongsTo(Client::class, 'clients_id');
    }

    // relacion de muchos a uno.
    public function menus()
    {
        return $this->belongsTo(Menu::class, 'menus_id');
    }
}
