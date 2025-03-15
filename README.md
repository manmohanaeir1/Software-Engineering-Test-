# System Monitor

## Description
This project is a basic log parsing and alerting system designed to monitor a log file for specific security-related events. The `logParser` function reads through the log file line by line and detects events such as failed login attempts, unauthorized access attempts, and malicious activities. When such events are detected, the system generates real-time alerts by printing messages to the output.

## Steps to Run the Code
1. **Clone the Repository**:
   ```sh
   git clone https://github.com/manmohanaeir1/system_monitor.git
   cd system_monitor


2. Prepare the Log File: Ensure that the system_monitor.log file is present in the same directory as system_monitor.php. The log file should contain entries that the parser will analyze. Here is an example of what the content might look like:

    2023-10-01 12:00:00 INFO User login successful: user1
2023-10-01 12:05:00 ERROR failed login attempt: user2
2023-10-01 12:10:00 WARNING unauthorized access attempt: user3
2023-10-01 12:15:00 INFO User logout: user1
2023-10-01 12:20:00 CRITICAL malicious activity detected: user4
2023-10-01 12:25:00 INFO User login successful: user5
2023-10-01 12:30:00 ERROR failed login attempt: user6

3. Run the PHP Script: Execute the PHP script to start the log parsing process:

 php system_monitor.php      

   
