# Display

Install netbeans IDE in ubuntu using following commmands
>First install Oracle Java via PPA, or install OpenJDK using Ubuntu Software
>Download the NetBeans bundles from the link below
>https://netbeans.apache.org/download/index.html
Open terminal from Unity Dash, App Launcher, or via Ctrl+Alt+T shortcut key. When it opens run commands

Navigate to Downloads folder
>cd ~/Downloads

Make the downloaded script executable:
>chmod +x netbeans-8.2-javase-linux.sh

Finally run the script:
>./netbeans-8.2-javase-linux.sh
In the commands, change “netbeans-8.2-javase-linux.sh” with the package name you downloaded.

To install the script, run commands below one by one:
>Sudo add-apt-repository ppa:vajdics/netbeans-installer
>Sudo apt update
>Sudo apt install netbeans-installer

Install xampp 
The first step is to download the XAMPP package for Linux from the official Apache Friends website:
>https://www.apachefriends.org/index.html
Move to the Downloads folder by using the following command
$ cd /home/[username]/Downloads
The installation package you downloaded needs to be made executable before it can be used further
$ chmod 755 [package name]
Confirm execute permission
$ ls -l [package name]
Launch the Setup Wizard
$ sudo ./[package name]
Launch XAMPP through the Terminal through following command
$ sudo /opt/lampp/lampp start
Verify Installation through following command
http://localhost

Open chrome and enter following command
localhost/phpmyadmin
Create database using create database statement
create tables using Create table statement 
create tables as eventreg, register under database event

Open netbeans 
>select and open file login.php file and run the file using run command
Follow same process for other three files register.php, eventreg.php, configure.php, home.php
run all the files using run command
sudo apt-get update
sudo apt-get upgrade
create an html file in the template folder
run command python3 manage.py server and type the ip address in the web browser to use the portal

