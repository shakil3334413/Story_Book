<?php
if (!function_exists('changeDateFormate')) {
    function changeDateFormate($date,$date_format) : string
    {
         return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
    }
}

?>
