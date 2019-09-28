---
title: Databases
description: You can install and manage mongodb, mysql, mariadb, mysql or postgresql with Nesabox.
extends: _layouts.documentation
section: docs
---

# Databases
When provisioning your server with Nesabox, you can select the databases applications running on this server are going to need. The options available are:

-> MongoDB v4.2

-> Mysql v5.8

-> MariaDB v10.13

-> Mysql v8.0

-> PostgresQL v11

After the server provisioning process, the `root` or `admin` passwords for the installed databases are emailed to you.

## Managing databases

You can manage each of the databases you installed from your dashboard directly. Select the server, and you'll see tabs for each of the databases.

![Server databases tabs](https://res.cloudinary.com/bahdcoder/image/upload/v1569660313/Screenshot_2019-09-28_at_09.44.46_py6bpn.png)

## MongoDB

You can add unlimited MongoDB databases right from your dashboard. All you require is the `name`.

![Mongodb Management](https://res.cloudinary.com/bahdcoder/image/upload/v1569661326/Screenshot_2019-09-28_at_10.01.47_qx0epv.png)

You need to add new database users to this database to be able to be able to access it. When adding a database user to a database, you can give the user only `READ` access. 

![Mongodb database users management](https://res.cloudinary.com/bahdcoder/image/upload/v1569662047/Screenshot_2019-09-28_at_10.01.47_md73xq.png)

You can also delete users and databases. Before deleting databases, make sure no sites are connected to them.

## MySQL 5.7 / MySQL 8.0 / MariaDB 10.13
For these databases, when adding a new database, you can as well add a database user and password to access this database.

<div class='info'>
    For security, It is recommended to manage one database with only one user.
</div>
 
You can also add database users directly, and select the databases the user has `READ/WRITE` access to.

![SQL user](https://res.cloudinary.com/bahdcoder/image/upload/v1569662604/Screenshot_2019-09-28_at_10.23.07_rjxa5k.png)
