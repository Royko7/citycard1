<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['user_id', 'title', 'image','desc', 'body'];
//    protected $image = 123;
    protected $attributes = [
        'image' => ' nulev',
        'desc' => '12'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getShortBodyAttribute()
    {
//        $truncated = substr($string,0,strpos($string,' ',100));
        $string = strip_tags($this->body);
        $pos=stripos($string, '', 220);
        substr($string,0,$pos );
        return substr($string,0,strpos($string,' ',220)).'...';
//        return  Str::limit($string,220,'...');
    }

}
