#!/bin/bash

echo "Run ... wait :-)"
cd apachephp
docker build . -t mycent
cd ..
cd visual
docker build . -t pvisual
cd ..
cd elastic
docker build . -t elastic
cd ..

docker-compose down
docker-compose up
