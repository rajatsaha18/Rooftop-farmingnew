<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    private static $site;
    private static $categories;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'site-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function updateSite($request)
    {
        self::$site = SiteSetting::first();
        if(self::$site)
        {
        self::$site->email          = $request->email;
        self::$site->mobile         = $request->mobile;
        self::$site->address        = $request->address;
        if($request->file('image'))
        {
            if(file_exists(self::$site->image))
            {
                unlink(self::$site->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$site->image;
        }
        self::$site->image    = self::$imageUrl;
        self::$site->save();
        }
        else
        {
        self::$site = new SiteSetting();
        self::$site->email          = $request->email;
        self::$site->mobile         = $request->mobile;
        self::$site->address        = $request->address;
        self::$site->image          = self::getImageUrl($request->file('image'));
        self::$site->save();

        }

    }
}
