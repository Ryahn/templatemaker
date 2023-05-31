#!/bin/bash

echo `date +"%Y_%m_%d_%H-%M-%S"` >> /var/log/gitupdate.log
cd /var/www/html
git fetch --all; git reset --hard origin/main >> /var/log/gitupdate.log
git pull >> /var/log/gitupdate.log