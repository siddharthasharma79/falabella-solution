# falabella-solution

This package is developed to solve the falabella challange problem.

> **Falabella-Challange:** Write a program that prints all the numbers from 1 to 100. However, for multiples of 3, instead of the number, print "Linio". For multiples of 5 print "IT". For numbers which are multiples of both 3 and 5, print "Linianos". But here's the catch: you can use only one `if`. No multiple branches, ternary operators or `else`.

# Prerequisits

Following packages must be installed on your system to run this solution.

1. PHP v7.0.0 or higher [[Get PHP]](https://www.php.net/downloads.php)
2. composer [[Get Composer]](https://getcomposer.org/download/)
3. git [[Get Git]](https://git-scm.com/downloads)
   > _**Note:** php, composer and gits should be in your path to proceed with further steps_

# Installation

Installation will take following 3 steps

### Step 1. Clone repository

```
git clone https://github.com/siddharthasharma79/falabella-solution.git
```

### Step 2. CD to clone repository directory

```
cd falabella-solution
```

### Step 3. Run following command

```
composer install
```

> _**Note:** After step 3, Make sure **bin** and **vendor** folder have been created in your root directory_

# How to run the solution

There are two solutions, class-base and non-class-base

### 1. Class Base Solution

run following command in your root diretory

```
php index.php
```

### 2. Non Class Base Solution

Run following command in your root dirctory

```
php printNumber.php
```

# How to run test cases

Run following command in your root dirctory

```
bin/phpunit --colors="always" -v test/RemainderTest.php
```

```
bin/phpunit --colors="always" -v test/PrinterTest.php
```
