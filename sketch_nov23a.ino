float pi = 3.14;
float diameter;
float height;


void setup() {
  // put your setup code here, to run once:
 Serial.begin(9600);

}

void loop() {
  // put your main code here, to run repeatedly:
 Serial.println("wat is de diameter");
   while (Serial.available()==0) {

    }
    diameter = Serial.parseFloat();

Serial.println("wat is de height");
while (Serial.available()==0) {

    }
    height = Serial.parseFloat();
  Serial.print(diameter);
   Serial.println(" is de diameter ");
   Serial.print(height);
   Serial.println(" is de height ");
   float volume = pi * (diameter / 2) * (diameter / 2) * height;
    Serial.print (volume);
  Serial.println ("cm3");
  delay (1000);
}
