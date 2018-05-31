#include <OneWire.h>
#include <DallasTemperature.h>

//pin donde se conecta el bus 1-Wire
const int pinDatosDQ=9;

//Instancia a las clases de OneWire y DallasTemperature
OneWire oneWireObjeto(pinDatosDQ);
DallasTemperature sensorDS18B20(&oneWireObjeto);
void setup(){
  //Iniciamos la comunicacion serie
  Serial.begin(9600);
  //Iniciamos el bus 1-Wire
  sensorDS18B20.begin();
}
void loop(){
  //Mandamos comandos para la toma de temperatura a los sensores
  Serial.println("Mandando comandos a los sensores");
  sensorDS18B20.requestTemperatures();
  
  //Leemos y mostramos los datos de los sensores DS18B20
  Serial.print(Temperatura sensor: );
  Serial.print(sensorDS18B20.getTempCByIndex());
  Serial.println(" C");

  delay(1000); //esperamos 1 segundo para la siguente lectura
}
