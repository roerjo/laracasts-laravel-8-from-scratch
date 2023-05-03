# Laravel 8 From Scratch Series
## Local Setup
Frontend assets can be found at https://github.com/laracasts/Laravel-From-Scratch-HTML-CSS (these will be needed later in the series)
### Prerequisites
- Docker
- Docker Compose
- MySQL client (e.g MySQL Workbench)
### Setup the project
1. Clone the project
2. Change into newly created project directory
3. Install the composer packages
```sh
 docker run --rm --interactive --tty --volume $PWD:/app composer install
```
4. Make a copy of the .env.example named .env
6. Setup the port forwarding to avoid conflicts with other local projects. In .env set the following variables:
```
FORWARD_DB_PORT=3006 # Or some other port that doesn't conflict
APP_PORT=8080 # Or some other port that doesn't conflict
```
7. Run Sail to start up the Docker containers
```sh
./vendor/bin/sail up
```
8. Generate the application key
```sh
./vendor/bin/sail php artisan key:generate
```
9. Application should now be available at localhost:{APP_PORT}
### Connect to the database
Using your MySQL client, setup a new connection with the following settings:
- Hostname: localhost or 127.0.0.1
- Port: value of FORWARD_DB_PORT
- Username: value of DB_USERNAME
- Password: value of DB_PASSWORD
- Default Database: value of DB_DATABASE
