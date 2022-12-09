<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class Christ extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'code',
        'platform',
        'image',
        'company',
    ];


    public function image():Attribute {
        return Attribute::set(function($value){
            if(gettype($value) === 'object' && get_class($value) === UploadedFile::class) {
                /**
                 * @var UploadedFile $value
                 */
                return Storage::url($value->store('public'));
            }
            return $value;
        });
    }
}
