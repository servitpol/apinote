<?php

namespace App\Http\Controllers;

use App\Img;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class ImgController
{
    // Save picture
    public static function imgSave($image, $user_id, $note_id)
    {
        $puth      = 'images/' . $user_id . '/' . $note_id . '/';
        $save_puth = public_path($puth);

        if (!File::exists($save_puth)) {
            File::makeDirectory($save_puth, 0755, true);
        }

        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save($save_puth . $filename);

        $thumb = Image::make($save_puth . $filename)->resize(300, 200);
        $thumb->save($save_puth . 'thumb_' . $filename, 60);

        $full_img_path  = url('/') . '/public/' . $puth . $filename;
        $thumb_img_path = url('/') . '/public/' . $puth . 'thumb_' . $filename;

        $img                 = new Img;
        $img->full_img_path  = $full_img_path;
        $img->thumb_img_path = $thumb_img_path;
        $img->save();

        return $img->id;
    }

    // Delete picture
    public static function imgFileDelete($user_id, $note_id, $img_id)
    {
        $puth        = 'images/' . $user_id . '/' . $note_id . '/';
        $delete_puth = public_path($puth);

        if (File::exists($delete_puth)) {
            File::deleteDirectory($delete_puth);
        }

        return true;
    }

}
