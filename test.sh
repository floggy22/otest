#!/bin/bash

echo "Run ... wait :-)"
cd apachephp
docker build . -t mycent
cd ..
docker-compose down
docker-compose up
