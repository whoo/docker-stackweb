#!/bin/bash

### ADD number of instances
MAX=${1:-5}

echo "Starting $MAX boxes"
DIR="-v `pwd`/html:/var/www/html "

#echo "$DIR"

#ADDing persitent mount point | html easier
#docker create --name htmldata -v /var/www/html debian /bin/true
#REP=$(docker inspect  -f "{{ (index .Mounts 0).Source }}" htmldata)

for a in $(seq 1 $MAX)
do
docker run -d $DIR -e "HOSTNAME=s$a"  --name s$a who0/dockweb-php-fpm
CMD="$CMD --link s$a:s$a "
LST="$LST s$a"
done

### Start Nginx with all php-fpm link
docker run -it --rm $DIR $CMD who0/dockweb-nginx

#### Remove stuff
####docker stop $LST
docker rm -f $LST


