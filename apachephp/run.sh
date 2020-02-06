#!/bin/bash

FIRSTRUN=/tmp/first.run

if test -f "$FIRSTRUN"; then
    echo "FIRSTRUN ..."
    sleep 30s
else
    echo "Normal"
fi