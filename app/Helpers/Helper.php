<?php

namespace App\Helpers;
use Exception;
use Illuminate\Support\Facades\Log;
class Helper
{
public function storeImage($image,$directory)
{
    $image_url = $image->getClientOriginalName();
    $image_url = time() . '-' . date('YmdHi') . '-' . $image_url;
    $image_url = "media/" . $directory . "/" . $image_url;
    $image->move("media/" . $directory . "/", $image_url);
    return $image_url;

}

    public function storeFile($file,$directory)
    {
        $file_url = $file->getClientOriginalName();
        $file_url = time() . '-' . date('YmdHi') . '-' . $file_url;
        $file_url = "media/" . $directory . "/" . $file_url;
        $file->move("media/" . $directory . "/", $file_url);
        return $file_url;

    }

    public function storeVideo($videoFile, $directory)
    {
        $file_url = $videoFile->getClientOriginalName();
        $file_url = time() . '-' . date('YmdHi') . '-' . $file_url;
        $file_url = "media/" . $directory . "/" . $file_url;
        $videoFile->move("media/" . $directory . "/", $file_url);
        return $file_url;
    }

    public function storeGalleryImage($image, $directory)
    {
        $uniqueId = uniqid();
        $originalName = $image->getClientOriginalName();
        $image_url = time() . '-' . date('YmdHi') . '-' . $uniqueId . '-' . $originalName;
        $image_url = "media/" . $directory . "/" . $image_url;
        $image->move("media/" . $directory . "/", $image_url);
        return $image_url;
    }


}
