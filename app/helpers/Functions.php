<?php

<<<<<<< HEAD
function printData($data, $die = true){
    
=======
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

function check_session()
{
    //check if there is an active session
    return isset($_SESSION['user']);
}

function printData($data, $die = true)
{
>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
    echo '<pre>';
    if(is_object($data) || is_array($data)){
        print_r($data);
    } else {
        echo $data;
    }

    if($die){
<<<<<<< HEAD
        die('<br>FIM<br>');
    }
}
=======
        die('<br>FIM</br>');
    }
}

function logger($message = '', $level = 'info')
{
    // create log channel
    $log = new Logger('app_logs');
    $log->pushHandler(new StreamHandler(LOGS_PATH));

    // add log message
    switch ($level) {
        case 'info':
            $log->info($message);
            break;
        case 'notice':
            $log->notice($message);
            break;
        case 'warning':
            $log->warning($message);
            break;
        case 'error':
            $log->error($message);
            break;
        case 'critical':
            $log->critical($message);
            break;
        case 'alert':
            $log->alert($message);
            break;
        case 'emergency':
            $log->emergency($message);
            break;
        
        default:
            $log->info($message);
            break;
    }
}


>>>>>>> 6b3d324 (Novas configurações no processo de login e configuração do log com o monolog)
