## Symfony Console Application Template

This console application template will get you the basics to be up and running with the Symfony Console package in no time.  This template comes with a default app named "app".

### Getting Started

Clone this repository

```
git clone https://github.com/mhanson01/console-template.git
```

Install the dependencies via composer

```
composer install
```

Run the tests

````
vendor/bin/codecept run
```

Run the app and the test command for yourself

```
php app test
```

You can also make the file executable and run it this way

```
chmod a+x app
./app test
```

Here are the different way to use the test command in the app

```
./app test
./app test "User Provided Message"
./app test --caps
./app test "User Provided Message" --caps
```

### Add your own code

The src directory is set up for PSR-4 autoloading.  You can begin utilizing this template by adding your application namespace to the src directory, this is where you will add your new commands.  You may copy the Acme\TestCommand as a basic example of how to get a command up and running.  You will also need to register any new commands you create.  You can do this by editing the "app" file.
