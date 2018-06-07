#include <OneWire.h>                 //Se importan las librerías
#include <DallasTemperature.h>
#define Pin 2                        //Se declara el pin donde se conectará la DATA
OneWire ourWire(Pin);                //Se establece el pin declarado como bus para la comunicación OneWire
DallasTemperature sensors(&ourWire); //Se llama a la librería DallasTemperature

const char depu = 4;
const char temp = 3;
const int hume = A0;
const int motor = 7;
const int LDRpin = A1;
int valorHumedad;
int tempera;
int luz;
volatile int NbTopsFan;
int Calc;
int caudal = 1;
int t=5000;


void setup () {
  Serial.begin(9600);//Inicializo el puerto serial a 9600 baudios
    pinMode(hume, INPUT);
   	pinMode(temp, INPUT);
		pinMode(motor, OUTPUT);
		pinMode(LDRpin, INPUT);
        sensors.begin();
        pinMode(caudal, INPUT);
        attachInterrupt(0, rpm, RISING);

}
void loop () {
  
  if (Serial.available()>0) { //Si hay comunicacion serial
  char c = Serial.read(); //Guardamos la lectura en una variable 
  humedad();
  temperatura();
  calccaudal();
  int valldr=digitalRead(LDRpin);
	if ((valorHumedad>50)||tempera>32||luz==HIGH){
		digitalWrite(motor, 0);
		Serial.println ("Motor apagado");
	}
	else {
		digitalWrite(motor, 1);	
		Serial.println ("Motor Encendido");
	}
  delay(500);
  }
}

void rpm ()
{
NbTopsFan++;
}

void temperatura(){
        sensors.requestTemperatures();       //Prepara el sensor para la lectura
 
        tempera = (sensors.getTempCByIndex(0)); //Se lee e imprime la temperatura en grados Centigrados
		Serial.print(tempera);
        Serial.println(" Grados Centigrados");
}
void calccaudal(){
        NbTopsFan = 0;
        sei();
        
        cli();
        Calc = (NbTopsFan * 60 / 5.5);
        Serial.print (Calc, DEC);
        Serial.println (" Litros/min\r\n");
}


void humedad(){
  int humedad = analogRead(hume);
  Serial.print(humedad);
      //Se hace la lectura analoga del pin A0 (sensor) y se pasa por la funcion
      //map() para ajustar los valores leidos a los porcentajes que queremos utilizar		
	int valorHumedad = map(analogRead(humedad), 0, 1023, 100, 0);	
	Serial.print("Humedad: "); //Se lee e imprime la humedad en %
	Serial.print(valorHumedad);
	Serial.println("%");
	return (valorHumedad);
}
