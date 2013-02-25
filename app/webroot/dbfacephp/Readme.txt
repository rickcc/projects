tmWorks DbFacePHP for MySQL

Visit http://www.dbfacephp.com to get more information.
Any question, please mail to : support@tmworks.org.

Please follow the following instructure to install:

Step 1. Uncompressing downloaded file.
  Please create a empty directory ("dbfacephp" i.e.) and uncompress the dbfacephp script archive.

Step 2. Uploading files.
  Upload content of this folder (all files and directories it includes) to your document root 
(public_html, www, httpdocs etc.) using FTP. Pay attention to DON'T use the capital letters in the 
name of the folder (for Linux users).

For example:
public_html/your_site/dbfacephp
Rename default.htaccess into .htaccess if you need to add PHP5 handler.

Step 3. Running install.php file.
  Now you can run install.php file. To do this, open a browser and type in Address Bar

http://{www.mydomain.com}/install.php
or
http://{www.mydomain.com}/{dbfacephp directory}/install.php
Check that you have write access to the config file directory (see {dbfacephp_directory}/application/config.php). 
Follow instructions on the screen. You will be asked to enter: database host, database name, username and password. 
Also you need to enter admin username and admin password, then you will be ready for starting dbfacephp.

Step 4. Deleting installation files.
  After successful installation you will get an appropriate message and warning to remove install.php file.
For security reasons, please delete them immediately. 

  