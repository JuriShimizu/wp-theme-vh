#!/bin/bash
DIR=$(cd $(dirname $0); pwd)
docker run -d --name wordpress -p 8080:80 -v ${DIR}/src/themes/vh:/srv/www/wordpress/wp-content/themes/vh -t dim0627/vh:latest bin/bash
