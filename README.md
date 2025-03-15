# System Monitor

## Description
This project is a basic log parsing and alerting system designed to monitor a log file for specific security-related events. The `logParser` function reads through the log file line by line and detects events such as failed login attempts, unauthorized access attempts, and malicious activities. When such events are detected, the system generates real-time alerts by printing messages to the output.

## Steps to Run the Code
1. **Clone the Repository**:
   ```sh
   git clone https://github.com/manmohanaeir1/system_monitor.git
   cd system_monitor


2. ** Prepare the Log File: Ensure that the system_monitor.log file is present in the same directory as system_monitor.php. The log file should contain entries that the parser will analyze. Here is an example of what the content might look like **:
```sh 
 2023-10-01 12:00:00 INFO User login successful: user1
2023-10-01 12:05:00 ERROR failed login attempt: user2
2023-10-01 12:10:00 WARNING unauthorized access attempt: user3
2023-10-01 12:15:00 INFO User logout: user1
2023-10-01 12:20:00 CRITICAL malicious activity detected: user4
2023-10-01 12:25:00 INFO User login successful: user5
2023-10-01 12:30:00 ERROR failed login attempt: user6

```
3. Run the PHP Script: Execute the PHP script to start the log parsing process:

 ```sh
php system_monitor.php
```  
 
 
# WebScanCrawler

## Description
WebScanCrawler is a simple web crawler designed to scan a website for basic security vulnerabilities. The crawler checks for the presence of HTTP security headers, outdated software versions, and forms without proper security attributes. It generates a report listing any detected vulnerabilities.

## Function Explanation
The core of this project is the `scanURL` function, which is responsible for scanning the specified URL for security vulnerabilities. Here is a detailed explanation of how the function works:

## Steps to Run the Code
1. **Clone the Repository **:
   ``` sh
   git clone https://github.com/manmohanaeir1/WebScanCrawler.git
   cd WebScanCrawler
   

2. ** Run the PHP Script: Execute the PHP script to start the vulnerability scan**:
   ``` sh
   php index.php
3. ** View the Output: The script will print a vulnerability scan report to the output, listing any detected security issues **.

4. ** Expected Output**
   ``` sh
    VULNERABILITY SCAN REPORT FOR https://itzonecomputer.com:
    MISSING HTTP SECURITY HEADER: X-Content-Type-Options



   
