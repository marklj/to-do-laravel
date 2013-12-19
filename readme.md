#Intro to MVC using Laravel#
Created by Mark Johnson

##Download using Git
1. Create a new sub-directory on your PHP5.4/MySQL server. If you dont have a web host and you have a unix machine (including Mac), local development works great using Laravel's built-in `php artisan serve` function. Learn more at [http://laravel.com/docs/artisan](http://laravel.com/docs/).
2. In your mac/unix terminal enter:  
 `git clone https://github.com/marklj/to-do-laravel.git`

##Download manually
1. Navigate yoyr browser to https://github.com/marklj/to-do-laravel
2. Click the zip link
3. Save to a folder on your local machine or PHP/MySQL server

##Requirements
* PHP 5.4
* Composer (http://getcomposer.org)
* MySQL Server

##Installation
1. Run `composer update` in your project root (or `composer.phar update` if Composer is not installed globally).
2. Create a new MySQL database
3. Open `app/config/database.php` and edit the MySQL host and database settings as needed.
4. Run database migrations in your termanal using `php artisan migrate`
5. Start your server using the termanal command `php artisan serve`

##Use this to LEARN
Learn how to code in an MVC environment by editing and extending this little app. Try one of the following to get started:

* Edit some view files to make them look less lame.
* Add validation rules to the `insert` model function to make your app more secure. Learn more about validation [here](http://daylerees.com/codebright/validation).
* Create new model/controller/views to add the functionality to edit or delete to-do items.
* Learn more specifically about Laravel at [laravel.com](http://laravel.com)
