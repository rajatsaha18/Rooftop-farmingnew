<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    private static $service;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'service-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newService($request)
    {
        self::$service = new Service();
        self::$service->name           = $request->name;
        self::$service->price          = $request->price;
        self::$service->description    = $request->description;
        self::$service->image          = self::getImageUrl($request->file('image'));
        self::$service->status         = $request->status;
        self::$service->save();

    }

    public static function updateService($request, $id)
    {
        self::$service = Service::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$service->image))
            {
                unlink(self::$service->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$service->image;
        }
        self::$service->name           = $request->name;
        self::$service->price          = $request->price;
        self::$service->description    = $request->description;
        self::$service->image          = self::$imageUrl;
        self::$service->status         = $request->status;
        self::$service->save();
    }

    public static function deleteService($id)
    {
        self::$service = Service::find($id);
        if(file_exists(self::$service))
        {
            unlink(self::$service->image);
        }
        self::$service->delete();
    }
}
