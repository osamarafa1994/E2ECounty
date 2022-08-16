
### Simple Login And Signup System Using PHP PDO

The Db.php file in the Model directory is where we get to set our environment credentials.

But before we get to that, you should probably try creating the database or you upload the *e2e_task_db.sql* file.

Inside of the Db.php file, the following line is where you can change the database name, database host, database user, and the database password.

```php
    /** Database Name */
    protected $dbName = 'e2e_task_db'; 
    /** Database Host */
    protected $dbHost = 'localhost'; 
    /** Database Root */
    protected $dbUser = 'root';
    /** Databse Password */
    protected $dbPass = '';
```

you can use these emails admin@e2e.com for admin ,test1@e2e.com, test2@e2e.com, test3@e2e.com for normal users  with the same password is : p@ssW0rd

After this, you can view the application in your broswer.