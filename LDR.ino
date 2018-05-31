cons int LDRPin = A1;
void setup(){
pinMode(LDRPin, INPUT);
}
void loop(){
  int value = digitalRead(LDRPin);
  if (value==HIGH){
    Serial.println("Es de dia.");  
    delay(500);
  }else{
    Serial.println("Es de Noche.");  
    delay(500);
  }
}
