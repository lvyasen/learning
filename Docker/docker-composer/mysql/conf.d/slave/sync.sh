#!/bin/sh
mysql -uroot -plvyasen123. -e "CHANGE MASTER TO MASTER_HOST='172.20.129.4',MASTER_USER='root',MASTER_PASSWORD='lvyasen123.',MASTER_PORT=3306, MASTER_CONNECT_RETRY=30;" &&
mysql -uroot -plvyasen123. -e "start slave "
