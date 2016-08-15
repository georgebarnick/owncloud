#!/bin/bash

sudo cat /dev/null

printf "Data storage usage per customer:\n"
./usage.sh -a

printf "\nCurrent memory (RAM) status:\n"
free -mh

printf "\nCurrent drive storage status:\n"
df -h

printf "\nCurrent drive temperature status:\n"
sudo hddtemp /dev/sdb
sudo hddtemp /dev/sdc

printf "\nInternal sensors status:\n"
sensors
