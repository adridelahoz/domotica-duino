#!/usr/bin/env python
import cgi
import serial
import time
 
arguments = cgi.FieldStorage()
ser=serial.Serial('/dev/ttyUSB0',9600)
if 'status' in arguments:
	ser.write('sts')
	print(ser.readline())
else:
 
	ser.write(arguments['port'].value)
	ser.write(arguments['value'].value)
	ser.write('sts')
	print(ser.readline())
