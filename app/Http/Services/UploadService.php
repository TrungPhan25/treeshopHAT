<?php

namespace App\Http\Services;


class UploadService
{
    public function store($request){
        if($request->hasFile('file')){

            try{
                $file = $request->file('file');

                $name = $file->getClientOriginalName();
                $pathFull='uploads/'.date("Y/m/d");
                $request->file('file')->storeAs(
                    'public/'.$pathFull, $name
                );

                return  '/treeshopHAT/public/storage/'.$pathFull.'/'.$name;
            }catch (\Exception $error){
                return false;
            }

        }
    }


}
