#!/usr/bin/python
# -*- coding: iso-8859-1 -*-
import sys, time, serial

serialPort ='/dev/ttyUSB1'

def infoSerial():
    print '\nDatos generales de la comunicación serial establecida'
    # Iniciando conexión serial
    arduinoPort = serial.Serial(serialPort, 9600, timeout=1)

    # Reset manual del Arduino
    arduinoPort.setDTR(False)  
    time.sleep(0.3)  
    # Se borra cualquier data que haya quedado en el buffer
    arduinoPort.flushInput()  
    arduinoPort.setDTR()  
    time.sleep(0.3)
    arduinoPort.write("c")
  #  print '\nEstado del puerto: %s ' % (arduinoPort.isOpen())
   # print 'Nombre del dispositivo conectado: %s ' % (arduinoPort.name)
   # print 'Dump de la configuración:\n %s ' % (arduinoPort)
    #print '\n###############################################\n'
    # Cerrando la conexión serial
    arduinoPort.close()

if __name__ == '__main__':
    infoSerial()