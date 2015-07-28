import processing.serial.*;

Serial port;

void setup() {
  port = new Serial(this, "COM3", 9600);
  port.bufferUntil('\n');
}

void draw(){
  String filecolor[] = loadStrings("../../color.txt");

  port.write(filecolor[0]);
  
  println(filecolor[0]);
  delay(2000);
}
