#!/usr/bin/env python
import time
import serial
arduino = serial.Serial('/dev/ttyACM0', 9600)


arduino.write("b")

arduino.close()
