<?php
/**
 * Created by PhpStorm.
 * User: missourpro
 * Date: 23/04/2018
 * Time: 03:09
 */

namespace App;


use Illuminate\Http\Request;

class ImageInput
{
    /**
     * @var Request
     */
    private $request;
    private $name;

    /**
     * ImageInput constructor.
     * @param Request $request
     * @param string $name
     */
    public function __construct(Request $request,string $name='image')
    {

        $this->request = $request;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function path()
    {
        if($this->request->hasFile($this->name)){
            $path = (new UploadedImage($this->request->file($this->name)))->path();
        }
        else{
            $path=$this->request->get($this->name);
        }

        return $path;
    }
}