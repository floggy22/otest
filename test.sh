#!/bin/bash

echo "Run ... wait :-)"
cd apachephp
docker build . -t mycent
cd ..
cd visual
docker build . -t pvisual
cd ..

docker-compose down
docker-compose up
