#!/bin/sh
#whoami
echo 4 > /sys/class/gpio/export
echo out > /sys/class/gpio/gpio4/direction

