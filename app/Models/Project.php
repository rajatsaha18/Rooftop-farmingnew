<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    private static $project;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'project-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }

    public static function newProject($request)
    {
        self::$project = new Project();
        self::$project->name           = $request->name;
        self::$project->location       = $request->location;
        self::$project->project_type   = $request->project_type;
        self::$project->description    = $request->description;
        self::$project->image          = self::getImageUrl($request->file('image'));
        self::$project->status         = $request->status;
        self::$project->save();

    }
}
