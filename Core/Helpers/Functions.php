<?php 

function dd($data){
    echo "<pre>";
    die(var_dump($data));
}

function logger($message)
{
    $timestamp = date('Y-m-d H:i:s');
    $logFile = "app.log";
    $logLine = "[$timestamp] : $message";

    // Append log message to the log file
    file_put_contents($logFile, $logLine, FILE_APPEND);
}
