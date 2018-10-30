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

The MySQL server has it's own container and therefore PHP scripts connecting to the database will need to be pointed to the MySQL container IP address. 

You can run `docker ps` to get the ID of the running MySQL container and then `docker inspect <container_id>` to find the IP address. You will then need to assign this value to the `$db_server` variable, like below.


### `docker ps` output

```
"Networks": {
    "php-week-docker_default": {
        "IPAMConfig": null,
        "Links": null,
        "Aliases": [
            "e9f4c82ce8fe",
            "db"
        ],
        "NetworkID": "ac9a496e9cd72f9c23cf933c6a88cabe88d6fe0428851fc1b9222ec9ab08caed",
        "EndpointID": "b34d4ccf8e2a7cc672a1314a55f52681d9e729d4227c1eb60cd7c14f523c8fcb",
        "Gateway": "172.18.0.1",
        "IPAddress": "172.18.0.3", <------- IP address of container
        "IPPrefixLen": 16,
        "IPv6Gateway": "",
        "GlobalIPv6Address": "",
        "GlobalIPv6PrefixLen": 0,
        "MacAddress": "02:42:ac:12:00:03",
        "DriverOpts": null
    }
}
```

### PHP mysqli config

```
// Server is mysql docker container's IP address
// Found by docker inspect <cid>
$db_server = "172.18.0.3";
$db_username = "test";
$db_password = "test";
$db_database = "test";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);
```
