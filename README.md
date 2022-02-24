#Immunization App
This is a simple CRUD app for  Immunization data Management.
## How to install and run on your local system
1. git clone https://github.com/Atieno-Ouma/Immunization
2. cd Immunization/
3. composer install
4. npm install
5. cp .env.example .env
6. php artisan key:generate
7. Add your database config in the .env file (you can check my articles on how to achieve that)
8. php artisan migrate
9. php artisan serve (if the server opens up, http://127.0.0.1:8000,  then we are good to go)
10. Navigate to http://127.0.0.1:8000/projects


## Operations
1. Create a vaccination Record.
2. View a vaccination Record.
3. Edit a vaccination Record.
4. Delete a vaccination Record.
5. View all  vaccination Records.