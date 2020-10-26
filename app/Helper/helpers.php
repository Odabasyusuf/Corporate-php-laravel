<?php

if (!function_exists('clearAllLogs')) {
    function clearAllLogs()
    {
        Artisan::call("route:clear");
        Artisan::call("config:clear");
        Artisan::call("cache:clear");
        Artisan::call("key:generate");
    }
}

if (!function_exists('checkDBConnection')) {
    function checkDBConnection()
    {
        $link = @mysqli_connect(config('database.connections.' . env('DB_CONNECTION') . '.host'),
            config('database.connections.' . env('DB_CONNECTION') . '.username'),
            config('database.connections' . env('DB_CONNECTION') . '.password'));
        if ($link)
            return mysqli_select_db($link, config('database.connections.' . env('DB_CONNECTION') . '.database'));
        return false;
    }
}

if (!function_exists('getVar')) {
    function getVar($list)
    {
        $file = resource_path('vars/'.$list.'.json');
        if(File::exists($file)){
            //return file_get_contents($file);
            return json_decode(file_get_contents($file),true);
        }
        return [];
    }
}
