#include <OneWire.h>                 //Se importan las librerías
#include <DallasTemperature.h>
#include <DHT.h>
 
// Definimos el pin digital donde se conecta el sensor
#define DHTPIN 2
// Dependiendo del tipo de sensor
#define DHTTYPE DHT11
 
// Inicializamos el sensor DHT11

#define Pin 4                      //Se declara el pin donde se conectará la DATA
OneWire ourWire(Pin);                //Se establece el pin declarado como bus para la comunicación OneWire
DallasTemperature sensors(&ourWire); //Se llama a la librería DallasTemperature
DHT dht(DHTPIN, DHTTYPE);
const char depu = 4;
const char temp = 3;
const int hume = A0;
const int lluv = A2;
const int motor = 7;
const int pinLDR = A1;
volatile int NbTopsFan;
int Calc;
int caudal = 1;


void setup () {
  Serial.begin(9600);//Inicializo el puerto serial a 9600 baudios
        pinMode(hume, INPUT);
        pinMode(lluv, INPUT);
   		pinMode(temp, INPUT);
		pinMode(motor, OUTPUT);
		pinMode(pinLDR, INPUT);
        sensors.begin();
        pinMode(caudal, INPUT);
        attachInterrupt(0, rpm, RISING);
		dht.begin();

}
void loop () {
  
  if (Serial.available()>0) { //Si hay comunicacion serial

    Serial.println(" ");
    Serial.println(" ");
    Serial.println(" ");
  sensors.requestTemperatures();       //Prepara el sensor para la lectura
  int tempera = (sensors.getTempCByIndex(0)); //Se lee e imprime la temperatura en grados Centigrados
  Serial.print(tempera);
  Serial.println(" Grados Centigrados");

       //Se hace la lectura analoga del pin A0 (sensor) y se pasa por la funcion
      //map() para ajustar los valores leidos a los porcentajes que queremos utilizar		
	//int valorHumedad = map(analogRead(humedad), 0, 1023, 100, 0);	
	Serial.print("Humedad tierra: "); //Se lee e imprime la humedad en %
	Serial.print(map(analogRead(hume), 0, 1023, 100, 0));
	Serial.println("%");
  

       //Se hace la lectura analoga del pin A2 (sensor) y se pasa por la funcion
      //map() para ajustar los valores leidos a los porcentajes que queremos utilizar    
  //int valorlluvia = map(analogRead(lluvia), 0, 1023, 100, 0); 
  Serial.print("Lluvia: "); //Se lee e imprime la humedad en %
  Serial.print(map(analogRead(lluv), 0, 1023, 100, 0));
  Serial.println("%");
	  
	  
	  
	float h = dht.readHumidity();
  // Leemos la temperatura en grados centígrados (por defecto)
  float t = dht.readTemperature();
  // Leemos la temperatura en grados Fahrenheit
  float f = dht.readTemperature(true);
 
  // Comprobamos si ha habido algún error en la lectura
  if (isnan(h) || isnan(t) || isnan(f)) {
    Serial.println("Error obteniendo los datos del sensor DHT11");
  }
 
  // Calcular el índice de calor en Fahrenheit
  float hif = dht.computeHeatIndex(f, h);
  // Calcular el índice de calor en grados centígrados
  float hic = dht.computeHeatIndex(t, h, false);
 
  Serial.print("Humedad: ");
  Serial.print(h);
  Serial.println(" %\t");
  Serial.print("Temperatura: ");
  Serial.print(t);
  Serial.println(" *C ");



   // Guardamos el valor leido del ADC en una variable
  // El valor leido por el ADC (voltaje) aumenta de manera directamente proporcional
  // con respecto a la luz percibida por el LDR
  int valorLDR= analogRead(pinLDR);
  
  // Devolver el valor leido a nuestro monitor serial en el IDE de Arduino
if (valorLDR>300){
  Serial.println ("Es de noche.");
  
  }else Serial.println("Es de dia.");
	  
  delay(10000);
  }
}

void rpm ()
{
NbTopsFan++;
}
void calccaudal(){
        NbTopsFan = 0;
        sei();
        cli();
        Calc = (NbTopsFan * 60 / 5.5);
        Serial.print (Calc, DEC);
        Serial.println (" Litros/min\r\n");
}

