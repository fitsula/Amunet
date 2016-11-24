## Step 1: Clone

Open folder with your website and clone repo

``` bash
    git clone https://github.com/fitsula/Amunet.git ./

```


## Step 2: Database

Import db dump

``` bash
    mysql -uname -p pass < mysql_database.sql

```


## Step 3: Include

Add next line into needed to monitoring pages

``` php
    <?php include 'amunet.php'; ?>

```


## Step 4: Profit

Go to your.site/amunet_admin.php and see awesome information
