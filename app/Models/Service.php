<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use KingOfCode\Upload\Uploadable;

class Service extends Model
{
    use HasFactory;
    use Uploadable;
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function descriptions()
    {
        return $this->hasMany(Description::class);
    }
    public function tariffs()
    {
        return $this->hasMany(Tariff::class);
    }

    protected $guarded = ['content'];

    protected $uploadableImages = [
        'image',
        'inner_image'
    ];

    static function add($request) {
        $service = Service::create($request->except('content'));
        $descriptions = [];
        foreach ($request->get('content') as $content) {
            $descriptions[] = new Description([
                'content' => $content
            ]);
        }
        $service->descriptions()->saveMany($descriptions);
    }

    private function deleteImageFiles($imageField) {

        Storage::delete([
            $this->getImageDatabasePath($imageField),
            $this->getImageDatabasePath($imageField, 'medium'),
            $this->getImageDatabasePath($imageField, 'thumb'),
        ]);
        $this->{$imageField} = null;
    }

    private function getImageDatabasePath($imageField, $type = 'normal') {
        $genericPath = $this->{$imageField};
        return str_replace('{type}', $type, $genericPath);
    }


    function edit($request, $service) {

        foreach ($this->uploadableImages as $imageFieldName) {
            if(request()->hasFile($imageFieldName)) {
                $this->deleteImageFiles($imageFieldName);
            }
        }



        $this->fill($request->all());
        $this->save();
        $this->descriptions()->delete();
        $descriptions = [];
        foreach ($request->all()['content'] as $content) {
            $descriptions[] = new Description([
                'content' => $content
            ]);
        }
        $service->descriptions()->saveMany($descriptions);

    }


}
