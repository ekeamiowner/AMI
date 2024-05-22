# Annales Mathematicae et Informaticae
The project was implemented in the scope of the Application Development course at the Eszterházy Károly Catholic University. (2022-2024)
![EKCU](/ami-journal/public/img/EKCU.png)

The original working page can be found [here](https://ami.uni-eszterhazy.hu/).<br><br><br><br>


## Content of the repository
### Documents:
- `docs`
  - `Követelményspecifikáció.md`
  - `Funckionális specifikáció.md`
  - `Rendszerterv.md`
 
_The documentation is incomplete and does not cover the project. It needs to be rewritten and supplemented. (2024.05.22.)_ 

### Source code:
- `ami-journal`<br><br><br><br>



## Installation
### Requirements:
Before cloning from the repository, you must have [`XAMPP`](https://www.apachefriends.org/download.html) driver, [`Node.js`](https://nodejs.org/en/download) and [`Composer`](https://getcomposer.org/download/) installed.

### After Cloning:
1. Create a new MySQL database named `ami`.
2. Locate the `/ami-journal/.env.example` file. Make a copy of it and rename it to `.env`. Then find the following line and modify it:
```plaintext
DB_DATABASE=ami
```

Open two new terminals in the `/ami-journal` directory and enter the following commands in order.
### Server side terminal:
`composer install` | `php artisan migrate` | `php artisan db:seed` | `php artisan key:generate`

### Client side terminal:
`npm install` | `npm run build`<br><br><br><br>



## Run the project
To run the project, type the following two commands in the `/ami-journal` directory:
### Server side terminal:
`php artisan serve`

### Client side terminal:
`npm run dev`<br><br><br><br>



## Seed and access
By default, 3 users are uploaded and the password for each is `password`
- `admin` (admin@test.com - password)
- `reviewer` (reviewer@test.com - password)
- `regular user` (user@test.com - password)

As for the articles, you can download the pre-seeded article [here](https://drive.google.com/drive/folders/1_3sxDKHt6xoONmO4U_pfAN-SJ4unpxn2?usp=sharing).
Copy them to `storage/app/pdf` and `storage/app/latex` directories.<br><br><br><br>



## Troubleshooting
If you are unable to install or run the project, or if you encounter an error, try running the following commands:

### Server side terminal:
`composer update` | `php artisan cache:clear` | `php artisan route:clear`

### Client side terminal:
`npm update` | `npm run build`
