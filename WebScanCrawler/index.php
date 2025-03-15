<?php
 function scanURL($url) {
     $vulnerabilities = array();
    
     $content = file_get_contents($url);
    
     if (strpos($content, 'X-Content-Type-Options') === false) {
        $vulnerabilities[] = 'MISSING HTTP SECURITY HEADER: X-Content-Type-Options';
    }
    if (strpos($content, 'Strict-Transport-Security') === false) {
        $vulnerabilities[] = 'MISSING HTTP SECURITY HEADER: Strict-Transport-Security';
    }
    
    // Check for outdated software versions
    if (strpos($content, 'Apache 2.4.6') !== false) {
        $vulnerabilities[] = 'OUTDATED SOFTWARE VERSION DETECTED: Apache 2.4.6';
    }
    
    // Check for forms without security attributes
    if (strpos($content, '<form action=""') !== false) {
        $vulnerabilities[] = 'FORM WITHOUT PROPER ACTION ATTRIBUTE: /CONTACT-FORM';
    }
    if (strpos($content, '<form method="GET"') !== false) {
        $vulnerabilities[] = 'FORM WITHOUT PROPER METHOD ATTRIBUTE: /CONTACT-FORM';
    }
    
    // Generate the vulnerability scan report
    echo "VULNERABILITY SCAN REPORT FOR $url:\n";
    foreach ($vulnerabilities as $vulnerability) {
        echo "- $vulnerability\n";
    } 
}

// URL to scan
$url = 'https://itzonecomputer.com';

// Start the scan
scanURL($url);

?>