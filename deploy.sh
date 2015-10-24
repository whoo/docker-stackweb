#!/bin/bash

MAX=${1:-5}

echo "Starting $MAX box"

docker create --name htmldata -v /var/www/html debian /bin/true

for a in $(seq 1 $MAX)
do
docker run -d --volumes-from htmldata --name s$a who0/dockweb-php-fpm
CMD="$CMD --link s$a:s$a "
LST="$LST s$a"
done

docker run -it --rm --volumes-from htmldata $CMD who0/dockweb-nginx

####docker stop $LST
docker rm -f $LST


