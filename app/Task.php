<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
//    protected $fillable = ['name','completed'];
    protected $guarded = [];


    public function file()
    {
        return $this->hasOne(File::class);
//        return $this->hasOne('App\Class');
    }

    public function assignFile(File $file)
    {

        $file->task_id = $this->id;
        $file->save();
    }


    public function assignTags($Tags)
    {

        this->tags()->saveMany(tags);

    }
    public function addTags($tag)
    {

        this->tags()->save(tag);

    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }



}
