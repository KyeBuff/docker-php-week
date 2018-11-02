# PHP Week Docker

The composed Docker image is stored [here](https://hub.docker.com/r/kyebuff/phpweek/) on DockerHub.

## Setup

### Install Docker

Click [here](https://docs.docker.com/docker-for-mac/install/).

Make sure to create an account when the app loads.

### Clone this repo.

`git clone git@github.com:KyeBuff/docker-php-week.git`

### Build the containers from binary images

`docker-compose up --build -d`

This will create two containers. The PHP/Apache container is available at [Port 8080](http://localhost:8080) and Mailhog is available at [Port 8025](http://localhost:8025).

### Connecting to MySQL DB

The MySQL server has it's own container and therefore PHP scripts connecting to the database will need to be pointed to the MySQL container IP address. A static IP address has been assigned to the MySQL container at 172.28.1.3 and the PHP will use this IP to setup a DB connection.

```
$db_server = "172.28.1.3";
$db_username = "test";
$db_password = "test";
$db_database = "test";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);
```

## Maintaining the Containers

### Starting the containers 

`docker-compose start` - similar to vagrant up

### Stopping the containers 

`docker-compose stop`  - similar to vagrant halt

### Restart the containers 

`docker-compose restart`  - similar to vagrant reload

### Remove all containers

`docker-compose rm`  - similar to vagrant destroy

