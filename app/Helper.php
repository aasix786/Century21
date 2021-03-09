<?php
function display_date($date){
    return date('M d, Y h:i a', strtotime($date));
}

function upload_image($image, $path){
    $filename = 'no_image.png';
    if (request()->hasFile($image)) {
        $file = request()->file($image);
        $filename = str_replace(' ', '-', md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension());
        $file->move($path, $filename);
    }
    return $filename;
}

function upload_audio($audio, $path){

        $file = request()->file($audio);
        $filename = $path.str_replace(' ', '-', md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension());
        $file->move($path, $filename);
//    }
    return $filename;
}
function display_image($path, $image){
    if(!empty($image) && $image != 'no_image.png'){
        if(@getimagesize($path.$image)){
            $url = asset($path.$image);
        }else{
            $url = asset('/uploads/default/no_image.png');
        }
    }else{
        $url = asset('/uploads/default/no_image.png');
    }
    return $url;
}

function update_image($new_image, $old_image, $path){
    $filename = $old_image;
    if (request()->hasFile($new_image)) {
        $file = request()->file($new_image);
        $filename = str_replace(' ', '-', md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension());
        if($file->move($path, $filename)){
            if(@getimagesize($path.$old_image) && $old_image != 'no_image.png'){
                unlink($path.$old_image);
            }
        }
    }
    return $filename;
}

function update_audio($new_audio, $old_audio, $path){

    $filename = $old_audio;
    if (request()->hasFile($new_audio)) {
        $file = request()->file($new_audio);
        $filename = $path.str_replace(' ', '-', md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension());
        if($file->move($path, $filename)){
            if($old_audio != NUll || $old_audio != ''){
//
                unlink($old_audio);
            }
        }
    }
    return $filename;
}
?>
