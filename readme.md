**Simple Blog Application**


Requirements

`PHP >= 5.6.4
 OpenSSL PHP Extension
 PDO PHP Extension
 Mbstring PHP Extension
 Tokenizer PHP Extension
 XML PHP Extension
 Composer
 Bower
 `

Step 1: Get the code - Download or Clone the repository
If you used donwload method extract it in www (or htdocs if you using XAMPP) folder and put it in blog folder.

Step 2: Use Composer to install dependencies
First, download a copy of the composer.phar. Once you have the PHAR archive, you can either keep it in your local project directory or move to usr/local/bin to use it globally on your system. On Windows, you can use the Composer Windows installer.
Then run:
`composer install`

to install dependencies Laravel and other packages.

Step 3: Set the DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD in the .env file

Step 4: Create database
If you finished first three steps, now you can create database on your database server(MySQL). You must create database with utf-8 collation(uft8_general_ci), to install and application work perfectly.

Step 5: Install
Database:
For create database tables use this command:
`php artisan migrate`

And to initial populate database use this:
`php artisan db:seed`

Generate App Key with this command:
`php artisan key:generate`

File System:
Need get full permission on "storage" folder:
`chmod -R 777 storage`

Step 6: Web Server

Go to the project root directory and run
`php artisan serve`

Step 7: Start Page

In the web browser start app using http://127.0.0.1:8000
You should see one blog created from seed.
You can now login as admin:

`username: admin@blog.com
password: admin123`
