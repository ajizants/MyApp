<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content',
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        // Menambahkan dua data dummy saat model dimuat pertama kali
        static::created(function ($posts) {
            // Tambahkan data dummy di sini
            Posts::create([
                'title' => 'Sample Post 1',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ]);

            Posts::create([
                'title' => 'Sample Post 2',
                'content' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
            ]);
        });
    }
}
