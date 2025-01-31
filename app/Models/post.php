<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $fillable =['title','excerpt','body']; /* ini properti yang boleh diisi */
    protected $guarded = ['id']; /* jangan isi bagian ID, isi saja yg lain */
}
