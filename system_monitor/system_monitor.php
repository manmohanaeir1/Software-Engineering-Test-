 
 <?php
function logParser($logFile){
    $file = fopen($logFile, "r");
    while(!feof($file)){
        $line = fgets($file);
        if(strpos($line, "failed login") !== false){
            echo "ALERT: FAILED LOGIN ATTEMPT DETECTED AT ".date("Y-m-d H:i:s")."\n";
        }
        if(strpos($line, "unauthorized access") !== false){
            echo "ALERT: UNAUTHORIZED ACCESS ATTEMPT DETECTED AT ".date("Y-m-d H:i:s")."\n";
        }
        if(strpos($line, "malicious activity detected") !== false){
            echo "ALERT: MALICIOUS ACTIVITY DETECTED AT ".date("Y-m-d H:i:s")."\n";
        }
    }
    fclose($file);
}

logParser("system_monitor.log");

?>  
