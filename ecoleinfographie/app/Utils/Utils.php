<?php

namespace App\Utils;

class Utils
{
    static function storeNewSize($path, $filename, $suffix, $image)
    {
        \Storage::disk('public_folder')->put($path.'/'.$filename.$suffix.'.jpg', $image->stream());
    }
}
