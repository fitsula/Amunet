## Step 1: Clone

Open folder with your website and clone repo

``` bash
    git clone https://github.com/fitsula/Amunet.git ./

```



## Step 2: Database
1. Create database "amunet"
2. Import db dump

``` bash
    mysql -uname -p pass amunet < mysql_database.sql

```




## Step 3: Configuration

Make changes in amunet_config.php

Change next variables: dbServername, dbUsername, dbUserpass, dbName




## Step 4: Include

Add next line into needed to monitoring pages

``` php
    <?php include 'amunet.php'; ?>

```




## Step 5: Profit

Go to your.site/amunet_admin.php and see awesome information
