<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'blog-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newBlog($request)
    {
        self::$blog = new blog();
        self::$blog->name           = $request->name;
        self::$blog->description    = $request->description;
        self::$blog->image          = self::getImageUrl($request->file('image'));
        self::$blog->status         = $request->status;
        self::$blog->save();

    }
}
