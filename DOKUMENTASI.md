# Dokumentasi CRUD API HR

## Introduction

Dokumentasi ini menjelaskan cara mengakses layanan API HR untuk user dan admin. User dapat mengakses fitur yang sangat terbatas dan manager dapat mengakses semua fitur. Berikut tabel perbandingan fitur, antara ‘User’ dan ’Admin’.

| Fitur                             | User    | Admin   |
| --------------------------------- | ------- | ------- |
| Read Country                      | &check; | &check; |
| Create, Update, Delete Country    |         | &check; |
| Read Region                       | &check; | &check; |
| Create, Update, Delete Region     |         | &check; |
| Read Department                   | &check; | &check; |
| Create, Update, Delete Department |         | &check; |
| Read Job                          | &check; | &check; |
| Create, Update, Delete Job        |         | &check; |
| CRUD Employee                     |         | &check; |
| CRUD Location                     |         | &check; |
| CRUD Role                         |         | &check; |
| CRUD User                         |         | &check; |

## HTTP Request Methods

Saat ini, HR API hanya menyediakan metode permintaan: GET, POST, PUT, dan DELETE.

## URL Utama

```json
http://127.0.0.1:8000/
```

## Response Data

Berisi HTTP response status code.

-   Informational responses (1xx)
-   Successful responses (2xx)
-   Redirection messages (3xx)
-   Client error responses (4xx)
-   Server error responses (5xx)

## Contoh Response Data

-   `Sukses`
    Mengembalikan nilai dari body.

```json
{
    "username": "choiyena",
    "password": "choiyena99"
}
```

-   `Gagal`
    Mengembalikan nilai dari HTTP response status code.

```json
{
    "status": 500,
    "error": "Internal Server Error",
    "message": "No message available",
    "path": "/user/6"
}
```

## 1. User

### Ringkasan

Digunakan untuk mendapatkan daftar id user, username, dan password.

```json
http://127.0.0.1:8000/user
```

### Parameter

| Method    | Parameter | Tipe   | Keterangan |
| --------- | --------- | ------ | ---------- |
| GET BY ID | id        | String | ID User    |
| PUT       | username  | String | Username   |
| PUT       | password  | String | Password   |
| DEL       | id        | String | ID User    |

### Request

| Method    | Endpoint                     | Keterangan                                    |
| --------- | ---------------------------- | --------------------------------------------- |
| GET       | http://127.0.0.1:8000/user   | Mendapatkan informasi semua user              |
| GET BY ID | http://127.0.0.1:8000/user/1 | Mendapatkan informasi user dengan id 1        |
| PUT       | http://127.0.0.1:8000/user/5 | Update username dan password user dengan id 5 |
| DEL       | http://127.0.0.1:8000/user/7 | Menghapus user dengan id 7                    |

### Contoh Request

Method PUT, endpoint = http://127.0.0.1:8000/user/2

```json
{
    "username": "choiyena",
    "password": "choiyena99"
}
```

## 2. Country

### Ringkasan

Digunakan untuk mendapatkan daftar id country, code country, name country, dan region name.

```json
http://127.0.0.1:8000/country
```

### Parameter

| Method    | Parameter | Tipe   | Keterangan   |
| --------- | --------- | ------ | ------------ |
| GET BY ID | id        | String | ID Country   |
| POST      | code      | String | Code Country |
| POST      | name      | String | Name Country |
| POST      | region    | String | Name Region  |
| PUT       | code      | String | Code Country |
| PUT       | name      | String | Name Country |
| DEL       | id        | String | ID Country   |

### Request

| Method    | Endpoint                        | Keterangan                                |
| --------- | ------------------------------- | ----------------------------------------- |
| GET       | http://127.0.0.1:8000/country   | Mendapatkan informasi semua country       |
| GET BY ID | http://127.0.0.1:8000/country/4 | Mendapatkan informasi country dengan id 4 |
| POST      | http://127.0.0.1:8000/country   | Menambahkan data country baru             |
| PUT       | http://127.0.0.1:8000/country/5 | Update code dan nama country dengan id 5  |
| DEL       | http://127.0.0.1:8000/country/2 | Menghapus country dengan id 2             |

### Contoh Request

Method POST, endpoint = http://127.0.0.1:8000/country

```json
{
    "code": "CU",
    "name": "Cuba",
    "region": {
        "id": 2,
        "name": "America"
    }
}
```

## 3. Region

### Ringkasan

Digunakan untuk mendapatkan daftar id dan name region.

```json
http://127.0.0.1:8000/region
```

### Parameter

| Method    | Parameter | Tipe   | Keterangan  |
| --------- | --------- | ------ | ----------- |
| GET BY ID | id        | String | ID Region   |
| POST      | name      | String | Name Region |
| PUT       | name      | String | Name Region |
| DEL       | id        | String | ID Region   |

### Request

| Method    | Endpoint                       | Keterangan                               |
| --------- | ------------------------------ | ---------------------------------------- |
| GET       | http://127.0.0.1:8000/region   | Mendapatkan informasi semua region       |
| GET BY ID | http://127.0.0.1:8000/region/1 | Mendapatkan informasi region dengan id 1 |
| POST      | http://127.0.0.1:8000/region   | Menambahkan data region baru             |
| PUT       | http://127.0.0.1:8000/region/2 | Update nama region dengan id 2           |
| DEL       | http://127.0.0.1:8000/region/3 | Menghapus region dengan id 3             |

### Contoh Request

Method DEL, endpoint = http://127.0.0.1:8000/region/3

```json
{
    "name": "Asia"
}
```

## 4. Employee

### Ringkasan

Digunakan untuk mendapatkan daftar id, name employee, email, number phone, dan user id.

```json
http://127.0.0.1:8000/employee
```

### Parameter

| Method    | Parameter | Tipe    | Keterangan            |
| --------- | --------- | ------- | --------------------- |
| GET BY ID | id        | String  | ID Region             |
| POST      | name      | String  | Name Employee         |
| POST      | email     | String  | Email Employee        |
| POST      | number    | Integer | Number phone Employee |
| POST      | username  | String  | Username User         |
| POST      | password  | String  | Password User         |
| PUT       | name      | String  | Name Employee         |
| PUT       | email     | String  | Email Employee        |
| PUT       | number    | Integer | Number phone Employee |
| PUT       | username  | String  | Username User         |
| PUT       | password  | String  | Password User         |
| DEL       | id        | String  | ID Employee           |

### Request

| Method    | Endpoint                         | Keterangan                                 |
| --------- | -------------------------------- | ------------------------------------------ |
| GET       | http://127.0.0.1:8000/employee   | Mendapatkan informasi semua employee       |
| GET BY ID | http://127.0.0.1:8000/employee/5 | Mendapatkan informasi employee dengan id 5 |
| POST      | http://127.0.0.1:8000/employee   | Menambahkan data employee baru             |
| PUT       | http://127.0.0.1:8000/employee/4 | Update nama employee dengan id 4           |
| DEL       | http://127.0.0.1:8000/employee/2 | Menghapus employee dengan id 2             |

### Contoh Request

Method PUT, endpoint = http://127.0.0.1:8000/employee/4

```json
{
    "name": "Choi Yena",
    "email": "choiyena123@gmail.com",
    "number": 812345,
    "user": {
        "username": "choiyena",
        "password": "321CYN99"
    }
}
```

## 5. Role

### Ringkasan

Digunakan untuk mendapatkan daftar id, name role, dan privilege yang bisa digunakan.

```json
http://127.0.0.1:8000/role
```

### Parameter

| Method    | Parameter | Tipe   | Keterangan    |
| --------- | --------- | ------ | ------------- |
| GET BY ID | id        | String | ID Role       |
| POST      | name      | String | Name Role     |
| POST      | username  | String | Username User |
| POST      | password  | String | Password User |
| PUT       | name      | String | Name Role     |
| DEL       | id        | String | ID Role       |

### Request

| Method    | Endpoint                     | Keterangan                             |
| --------- | ---------------------------- | -------------------------------------- |
| GET       | http://127.0.0.1:8000/role   | Mendapatkan informasi semua role       |
| GET BY ID | http://127.0.0.1:8000/role/3 | Mendapatkan informasi role dengan id 3 |
| POST      | http://127.0.0.1:8000/role   | Menambahkan data role baru             |
| PUT       | http://127.0.0.1:8000/role/2 | Update nama role dengan id 2           |
| DEL       | http://127.0.0.1:8000/role/1 | Menghapus role dengan id 1             |

### Contoh Request

Method POST, endpoint = http://127.0.0.1:8000/role

```json
{
    "name": "public",
    "user": [
        {
            "username": "lizjiwonie",
            "password": "KJWliz123"
        },
        {
            "username": "manchae",
            "password": "0303eunchaeLS"
        }
    ]
}
```

## 5. Email

### Ringkasan

Digunakan untuk membuat dan mengirim email. Terdapat 3 jenis email, yaitu simple mail, mime mail, dan template mail.

### Parameter

| Method | Parameter  | Tipe   | Keterangan                                                          |
| ------ | ---------- | ------ | ------------------------------------------------------------------- |
| POST   | sendTo     | String | Alamat email yang dituju                                            |
| POST   | subject    | String | Subject email                                                       |
| POST   | body       | String | Isi email                                                           |
| POST   | attachment | String | Lokasi letak foto, video, file, atau dokumen yang ingin dilampirkan |

### Request

| Method | Endpoint                             | Keterangan                                                                                                   |
| ------ | ------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| POST   | http://127.0.0.1:8000/email          | Membuat simple mail yang berisi tulisan saja                                                                 |
| POST   | http://127.0.0.1:8000/email/attach   | Membuat mime mail dengan fitur dapat melampirkan foto, video, file, dan dokumen                              |
| POST   | http://127.0.0.1:8000/email/template | Membuat template mail dengan fitur template yang dibuat dengan html (menyesuaikan keperluan yang diinginkan) |

### Contoh Request

Method POST, endpoint = http://127.0.0.1:8000/email/template

```json
{
    "sendTo": "talithaazariasani@mhs.unisbank.ac.id",
    "subject": "Certificate EIE 2022",
    "body": "Certificate Training Nasional Engineering Informatics Android Studio for Mobile Apps Development Event on 1 - 30 November 2022 ",
    "attachment": "D:\\Documents\\graduation.gif",
    "name": "TALITHA AZARIA SANI",
    "participant": "PESERTA"
}
```

## Databases

#### Table User

| Name     |    Jenis     | Type           |
| -------- | :----------: | -------------- |
| id       |  bigint(20)  | AUTO_INCREMENT |
| username | varchar(255) |
| password | varchar(255) |

#### Table Country

| Name         |    Jenis     | Type           |
| ------------ | :----------: | -------------- |
| id           |  bigint(20)  | AUTO_INCREMENT |
| country_name | varchar(255) |
| code         |  varchar(2)  |
| region_id    |  bigint(20)  |

#### Table Region

| Name        |    Jenis     | Type           |
| ----------- | :----------: | -------------- |
| id          |  bigint(20)  | AUTO_INCREMENT |
| region_name | varchar(255) |

#### Table Employee

| Name          |    Jenis     | Type           |
| ------------- | :----------: | -------------- |
| id            |  bigint(20)  | AUTO_INCREMENT |
| email         | varchar(255) |
| employee_name | varchar(255) |
| number        |   int(11)    |
| department    |  bigint(20)  |

#### Table Department

| Name       |    Jenis     | Type           |
| ---------- | :----------: | -------------- |
| id         |  bigint(20)  | AUTO_INCREMENT |
| name       | varchar(255) |
| job_id     |  bigint(20)  |
| country_id |  bigint(20)  |
| manager_id |  bigint(20)  |

#### Table Job

| Name   |    Jenis     | Type           |
| ------ | :----------: | -------------- |
| id     |  bigint(20)  | AUTO_INCREMENT |
| title  | varchar(255) |
| salary |  bigint(10)  |

#### Table Location

| Name        |    Jenis     | Type           |
| ----------- | :----------: | -------------- |
| id          |  bigint(20)  | AUTO_INCREMENT |
| street_name | varchar(255) |
| city        | varchar(255) |
| country     |  bigint(20)  |

#### Table Role

| Name      |    Jenis     | Type           |
| --------- | :----------: | -------------- |
| id        |  bigint(20)  | AUTO_INCREMENT |
| role_name | varchar(255) |

#### Table Privilege

| Name           |    Jenis     | Type           |
| -------------- | :----------: | -------------- |
| id             |  bigint(20)  | AUTO_INCREMENT |
| privilege_name | varchar(255) |

#### Table User_Role

| Name    |   Jenis    | Type |
| ------- | :--------: | ---- |
| user_id | bigint(20) |
| role_id | bigint(20) |

#### Table Role_Privilege

| Name         |   Jenis    | Type |
| ------------ | :--------: | ---- |
| role_id      | bigint(20) |
| privilege_id | bigint(20) |
