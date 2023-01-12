# Laravel 8 From Scratch Series
## Local Setup
Frontend assets can be found at https://github.com/laracasts/Laravel-From-Scratch-HTML-CSS
### Prerequistes
- Docker
- Docker Compose
- MySQL client (e.g MySQL Workbench)
### Setup the project
1. Create a new Laravel project
```sh
curl -s "https://laravel.build/laravel-8-from-scratch?with=mysql,redis" | bash
```
2. Change into newly created project directory:
```sh
cd laravel-8-from-scratch
```
3. Setup the port forwarding to avoid conflicts with other local projects. In .env set the following variables:
```
FORWARD_DB_PORT=3006 # Or some other port that doesn't conflict
APP_PORT=8080 # Or some other port that doesn't conflict
```
4. Run Sail to start up the Docker containers
```sh
./vendor/bin/sail up
```
5. Application should now be available at localhost:{APP_PORT}
### Connect to the database
Using your MySQL client, setup a new connection with the following settings:
- Hostname: localhost or 127.0.0.1
- Port: value of FORWARD_DB_PORT
- Username: value of DB_USERNAME
- Password: value of DB_PASSWORD
- Default Database: value of DB_DATABASE

2. Setup the port forwarding to avoid conflicts with other local projects. In .env set the following variables:
```
FORWARD_DB_PORT=3006 # Or some other port that doesn't conflict
APP_PORT=8080 # Or some other port that doesn't conflict
```
1. Run Sail to start up the Docker containers
```sh
./vendor/bin/sail up
```
1. Application should now be available at localhost:{APP_PORT}
### Connect to the database
Using your MySQL client, setup a new connection with the following settings:
- Hostname: localhost or 127.0.0.1
- Port: value of FORWARD_DB_PORT
- Username: value of DB_USERNAME
- Password: value of DB_PASSWORD
- Default Database: value of DB_DATABASE
