# RESTORATEMTS
 
 
 ## Installation

 Please check the official laravel installation guide for server requirements before you start. Official Documentation

### Clone the repository
            >git clone https://github.com/bhjedi/RESTORATEMTS.git
            
### Switch to the repo folder
       >cd RESTORATE
       
### Install all the dependencies using composer
       >composer install
       >npm install
       >npm run dev
### Copy the example env file and make the required configuration changes in the .env file and in DB_DATABASE place your database name 
### Generate a new application key
>php artisan key:generate
### Run the database migrations (Set the database connection in .env before migrating)
>php artisan migrate
### Generate fake data
>For the User :   please generate role befor users , php artisan db:seed --class=RoleAndPermissionSeeder ,  php artisan db:seed --class=UserTableSeeder   the first user is restaurateur , the second is client , the password for the authentification is restorate
>For City : php artisan db:seed --class=CityTableSeeder

### Start the local development server
>php artisan serve








