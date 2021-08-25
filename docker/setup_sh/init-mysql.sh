#!/bin/sh
docker exec mysql "chmod 0775 docker-entrypoint-initdb.d/setup-database.sh"
docker exec mysql "sh ./docker-entrypoint-initdb.d/setup-database.sh"