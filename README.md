## Structure

The ```init.php```  at the root project directory creates a database called ```example_database``` in MySQL.
The ```init.php``` for all other subprojects create the required tables within the MySQL database.

## Getting started

Assuming you have php and MySQL installed and running, you can start a development server with:

```php -S localhost:8000```

Then you can go to ```localhost:8000/init.php``` to initialize the database, if you're running the project for the first time.

In case you are running a subproject for the first time, open the respective ```init.php``` for it.

### Example

Say you are opening ```vtop_mock``` for the first time. Then you should go to ```localhost:8000/vtop_mock/init.php``` first.