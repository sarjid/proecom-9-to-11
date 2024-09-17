<?php

use App\Models\Setting;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;



if (!function_exists('trimAll')) {
function trimAll($string) {
        return $string . '-' . 'boss';
  }

}

if (!function_exists('Date_Format')) {
    function Date_Format($date, $format)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format($format);
    }
}


if (!function_exists('getSettings')) {
    function getSettings(string $key): string
    {
        $settings = Cache::remember('settings', 86400, function () {
            return Setting::all();
        });
        $setting = $settings->where('key', $key)->first();
        return $setting ? (string)$setting->value : '';
    }
}



if (!function_exists('englishToBengaliNumber')) {

    function englishToBengaliNumber($englishNumber)
    {
        $englishDigits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        $bengaliDigits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');

        $bengaliNumber = str_replace($englishDigits, $bengaliDigits, $englishNumber);

        return $bengaliNumber;
    }
}




function send_msg($msg, $status, $code)
{
    $res = [
        'status' => $status,
        'message' => $msg,
    ];
    return response()->json($res, $code);
}


// Example usage:
// $englishNumber = "12345";
// $bengaliNumber = englishToBengaliNumber($englishNumber);
// echo "English Number: $englishNumber<br>";
// echo "Bengali Number: $bengaliNumber";




if (!function_exists('uploadSettingsImg')) {

    function uploadSettingsImg($requestFile, $savePath)
    {
        // $imgName = hexdec(uniqid()) . '.' . $requestFile->getClientOriginalExtension();
        // Image::make($requestFile)->save($savePath . $imgName);
        // $save_url = $savePath . $imgName;
        return $save_url;
    }
}
