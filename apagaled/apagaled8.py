#!/usr/bin/env python
import time
import serial
arduino = serial.Serial('/dev/ttyUSB0', 9600)


arduino.write("l")

arduino.close()