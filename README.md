## İleri web programlama dersi final ödevi

### Teknolojiler

- PHP
- MySQL
- Bootstrap 5

### Veritabanını oluştur

Phpmyadmin arayüzünde aşağıdaki query ile tabloyu oluşturabilirsiniz.

```
CREATE TABLE users(
	usersId INT AUTO_INCREMENT NOT NULL,
    usersName VARCHAR(128) NOT NULL,
    usersEmail VARCHAR(128) NOT NULL,
    usersUid VARCHAR(128) NOT NULL,
    usersPwd VARCHAR(128) NOT NULL,
    usersUsertype VARCHAR(10) NOT NULL,
    PRIMARY KEY (usersId)
);
```

### Veritabanı Erişimi

Veritabanı bağlantısı aşağıdaki dosyadan kuruluyor.

> includes/dbh.inc.php

```
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "loginsystem"; // veritabani adi
```
