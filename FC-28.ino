const int sensorPin = A0;
void setup(){
Serial.begin(9600);
}
void loop(){
  int humedad=analogRead(sensorPin);
  Serial.print(humedad);
  if (humedad<500)
  {
    //Aqui van las acciones que quiera
    Serial.println("Humedad baja, encienda el riego");
  }
  delay(1000); //esperamos 1 segundo hasta la proxima lectura
}
