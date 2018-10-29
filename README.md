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
