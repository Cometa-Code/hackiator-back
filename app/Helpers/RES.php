<?php

namespace App\Helpers;

class RES
{
    static public function OK($message = "OK", $infos = [])
    {
        return response([
            'message' => $message,
            'infos' => $infos,
        ], 200);
    }

    static public function CREATED($message = "CREATED", $infos = [])
    {
        return response([
            'message' => $message,
            'infos' => $infos,
        ], 201);
    }

    static public function UNAUTHORIZED($message = "UNAUTHORIZED", $infos = [])
    {
        return response([
            'message' => $message,
            'infos' => $infos,
        ], 401);
    }

    static public function NOTFOUND($message = "NOT FOUND", $infos = [])
    {
        return response([
            'message' => $message,
            'infos' => $infos,
        ], 404);
    }
}