# Getting started
## Requirement

[Docker Toolbox](https://www.docker.com/docker-toolbox)
[Docker Hub Account](https://hub.docker.com/)

## Start server

### Login to docker hub.
[Docker Hub](https://hub.docker.com/)

### Fetch latest sources.

```sh
git pull *this repository url*
cd *pulled directory*
./run.sh
```

Access to `your docker-machine ip:8080`.

## Stop server

Kill and remove docker container.

``` sh
docker kill [OPTIONS] CONTAINER [CONTAINER...]
docker rm [OPTIONS] CONTAINER [CONTAINER...]
```

# Theme
## Push theme update
In the your development environment.

``` sh
git push *your repository*
```

## Pull latest theme
In the your running host.

``` sh
git pull *your repository*
```

# Wordpress
## Push setting update
In the your development environment.

``` sh
docker commit *wordpress container name* dim0627/vh
docker commit *wordpress container name* dim0627/vh:*newest version*
docker push dim0627/vh
```

## Pull latest settings
In the your running host.

``` sh
docker pull dim0627/vh
TBD
```

# Database
## How to backup datafile of database

TBD

