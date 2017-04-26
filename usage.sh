#!/bin/bash

dd="/media/sysadmin/data1/" # data directory path

while test $# -gt 0
do
        case "$1" in
                -a) for d in $(sudo find $dd -maxdepth 1 -type d)
                do
                        if [[ ( $d != ${dd}updater_backup ) && ( $d != ${dd}files_external ) && ( $d != ${dd}admin ) && ( $d != $dd ) ]]; then
                                sudo du -hs $d;
                        fi
                done
                ;;
                -*) echo "Error: Invalid argument."
                ;;
                *) sudo du -hs $dd$1
        esac
        shift
done
exit 0
