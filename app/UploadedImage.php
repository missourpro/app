<?php
/**
 * Created by PhpStorm.
 * User: missourpro
 * Date: 23/04/2018
 * Time: 01:24
 */

namespace App;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class UploadedImage
{
    /**
     * @var UploadedFile
     */
    private $image;


    /**
     * UploadedImage constructor.
     * @param UploadedFile $image
     */
    public function __construct(UploadedFile $image)
    {

        $this->image = $image;
    }

    /**
     * @return string
     */
    public function path()
    {
        $imageName = uniqid() . '.' . $this->image->extension();
        $this->image->storePubliclyAs('public/img', $imageName);
        $path = '/storage/img/' . $imageName;
        return $path;
    }

}