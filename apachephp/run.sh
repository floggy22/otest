#!/bin/bash
#TODO Parameter

FIRSTRUN=/opt/mediarun/first.run

if test -f "$FIRSTRUN"; then
    echo "FIRSTRUN ... "
    #sleep 3s
    pushd /opt/mediarun
    pushd /var/www/html/w/maintenance
    
    #php install.php bla admin --dbserver db --dbpass 123 --pass 123
    while true; do
        echo "WAIT FOR DB... "
       
        php install.php wiki admin --dbserver db --dbuser root --lang de --dbpass 123 --pass 123 --scriptpath "/w"
        if [ $? -eq 0 ]; then
            echo "FERTIG"
            break
        fi
        sleep 2s
    done
    php update.php
    popd
    rm $FIRSTRUN
    popd
else
    echo "Normal"
fi

httpd
node /opt/parsoid/bin/server.js & 
tail -f /var/log/httpd/*