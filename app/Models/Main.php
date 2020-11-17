<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use KingOfCode\Upload\Uploadable;

class Main extends Model
{
    use HasFactory;
    use Uploadable;

    protected $table = 'main';

    protected $fillable = [
        'main_title',
        'application_text',
        'description_title',
        'description_content'
    ];
    protected $uploadableImages = [
        'image'
    ];

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

    function edit($fields) {
        foreach ($this->uploadableImages as $imageFieldName) {
            if(request()->hasFile($imageFieldName)) {
                $this->deleteImageFiles($imageFieldName);
            }
        }

        $this->fill($fields);
        $this->save();
    }

    static function splitLtrs() {
        $str = self::find(1)->main_title;
        $results = array();
        preg_match_all('/./u', $str, $results);
        return $results[0];
    }



}
