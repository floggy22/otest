#!/bin/bash

echo "Run ... wait :-)"
cd apachephp
docker build . -t mycent --no-cache
cd ..
cd visual
docker build . -t pvisual --no-cache
cd ..
cd elastic
docker build . -t elastic --no-cache
cd ..

docker-compose down
docker-compose up
