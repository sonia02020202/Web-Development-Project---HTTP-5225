# A Basic Introduction to PHP and Arrays

A basic example of using PHP arrays.

This tutorial will review how to define and use PHP arrays when creating HTML output. Here is a basic sample of using an array and the `echo` command to create a personalized hello mesage.

```php
<?php 

$person['first'] = 'Jane';
$person['last'] = 'Doe';
echo '<p>Hello '.$person['first'].' '.$person['last'].'!</p>';

?>
```

Arrays are a special type of variable that can be used to store more than one piece of data. Each piece of data is assigned a key. The example above includes one array named `$person` and two keys `first` and `last`. Arays are often used to store a list of data:

```php
<?php

$languages = array( 'PHP', 'HTML', 'JavaScript', 'CSS' );

?>
```

Or a group of information like an individuals profile:

```php
<?php 

$person['first'] = 'Jane';
$person['last'] = 'Doe';
$person['email'] = 'jane.doe@email.com';
$person['age'] = 30;

?>
```

There are some rules when naming your arrays and keys:

- Array names must follow the same rules as variable names.
- Unlike variables names, array keys can start with numbers or be numeric.
- Array keys can use any alpha-numeric characters and underscores.
- Array keys are case sensitive.

## The End Goal

The goal of this series of lessons is to become comfortable with retrieveing data from a database and displaying the data in a web page. When working with database data the process roughly follows these steps:

1. Fetch data from the database.
2. Create a loop to iterate through the retrieved data.
3. Use if statements to check which data is ready for output.
4. Put the data into a series of variables and/or arays.
5. Use `echo` to output the variables and format them with HTML. 

In this lesson we're going to focus on the last step, outputting data using HTML, variables, and the `echo` statement. This time the data will be placed in an array.

## Steps

1. Open up a new file and name it arrays.php.
2. Add the following code to the new PHP file:
    
    ```php
    <!doctype html>
    <html>
    <head>
        <title>Links and Arrays</title>
    </head>
    <body>
        
        <h1>Links and Arrays</h1>
        
        <p>Use PHP echo and arrays to output the following link information:</p>
            
        <hr>
        
        <?php
        
        $link['name'] = 'Codecademy';
        $link['url'] = 'https://www.codecademy.com/';
        $link['image'] = 'codecademy.png';
        $link['description'] = 'Learn to code interactively, for free.';
        
        ?>
            
    </body>
    </html>
    ```

3. After the array is defined use a series of `echo` statements to display the content. For example outputting the `$link['name']` might look like this:
    
    ```php
    <?php
    
    echo '<h1>'.$link['name'].'</h1>';
    
    ?>
    ```

> [!Note]
> Add each value from the array one at a time. Test your PHP after each new line of PHP. 

> [More information on PHP arrays](https://www.php.net/manual/en/language.types.array.php)

> Full tutorial URL:  
> https://codeadam.ca/learning/php-arrays.html

***

## Repo Resources

* [Visual Studio Code](https://code.visualstudio.com/) or [Brackets](http://brackets.io/) (or any code editor)
* [Filezilla](https://filezilla-project.org/) (or any FTP program)

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>
