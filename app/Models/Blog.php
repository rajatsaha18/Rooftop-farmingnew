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
        self::$blog = new Blog();
        self::$blog->name           = $request->name;
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }
        self::$blog->slug           = make_slug($request->name);
        self::$blog->description    = $request->description;
        self::$blog->image          = self::getImageUrl($request->file('image'));
        self::$blog->status         = $request->status;
        self::$blog->save();

    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$blog->image;
        }
        self::$blog->name           = $request->name;
        function make_slug($string) {
            return preg_replace('/\s+/u', '-', trim($string));
        }
        self::$blog->slug           = make_slug($request->name);
        self::$blog->description    = $request->description;
        self::$blog->image          = self::$imageUrl;
        self::$blog->status         = $request->status;
        self::$blog->save();
    }

    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if(file_exists(self::$blog))
        {
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }
}
