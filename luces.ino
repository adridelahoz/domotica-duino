void setup () {
  Serial.begin(9600);//Inicializo el puerto serial a 9600 baudios
    for (int i=4; i<=13; i++){
  	pinMode(i, OUTPUT);
    }//activa los pines del 4 al 13 en modo salida
}
void loop () {
  
  if (Serial.available()>0) { //Si hay comunicacion serial
  char c = Serial.read(); //Guardamos la lectura en una variable char
     luces(c); 
     leerestado();
    //  delay (t);  //Se provoca una parada de 10 segundo antes de la próxima lectura
  }
}

void leerestado(){
       Serial.print (digitalRead(12));
       Serial.print (digitalRead(11));
       Serial.print (digitalRead(10));
       Serial.print (digitalRead(9));
       Serial.print (digitalRead(8));
       Serial.print (digitalRead(7));
       Serial.print (digitalRead(6));
       Serial.print (digitalRead(5));
       Serial.println (digitalRead(4));
     }


void luces(char c){
    if (c == 'c') digitalWrite(12, 1);//enciendo el LED12
    if (c == 'd') digitalWrite(12, 0);//apago el LED12
    if (c == 'e') digitalWrite(11, 1);//enciendo el LED11
    if (c == 'f') digitalWrite(11, 0);//apago el LED11
    if (c == 'g') digitalWrite(10, 1);//enciendo el LED10
    if (c == 'h') digitalWrite(10, 0);//apago el LED10
    if (c == 'i') digitalWrite(9, 1);//enciendo el LED9
    if (c == 'j') digitalWrite(9, 0);//apago el LED9
    if (c == 'k') digitalWrite(8, 1);//enciendo el LED8
    if (c == 'l') digitalWrite(8, 0);//apago el LED8
    if (c == 'm') digitalWrite(7, 1);//enciendo el LED7
    if (c == 'n') digitalWrite(7, 0);//apago el LED7
    if (c == 'o') digitalWrite(6, 1);//enciendo el LED6
    if (c == 'p') digitalWrite(6, 0);//apago el LED6
    if (c == 'q') digitalWrite(5, 1);//enciendo el LED5
    if (c == 'r') digitalWrite(5, 0); //apago el LED5 
    if (c == 's') digitalWrite(4, 1);//enciendo el LED4
    if (c == 't') digitalWrite(4, 0); //apago el LED4
}
