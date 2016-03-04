#!/bin/bash

while test $# -gt 0
do
        case "$1" in
                -a) for d in $(sudo find /var/www/html/owncloud/data/ -maxdepth 1 -type d)
                do
                        if [[ ( $d != /var/www/html/owncloud/data/updater_backup ) && ( $d != /var/www/html/owncloud/data/demo ) && ( $d != /var/www/html/owncloud/data/ ) && ( $d != /var/www/html/owncloud/data/admin ) ]]; then
                                sudo du -hs $d;
                        fi
                done
                ;;
                -*) echo "Error: Invalid argument."
                ;;
                *) sudo du -hs /var/www/html/owncloud/data/$1
        esac
        shift
done
exit 0
