import processing.core.*; 
import processing.data.*; 
import processing.event.*; 
import processing.opengl.*; 

import processing.serial.*; 

import java.util.HashMap; 
import java.util.ArrayList; 
import java.io.File; 
import java.io.BufferedReader; 
import java.io.PrintWriter; 
import java.io.InputStream; 
import java.io.OutputStream; 
import java.io.IOException; 

public class process extends PApplet {



Serial port;

public void setup() {
  port = new Serial(this, "COM3", 9600);
  port.bufferUntil('\n');
}

public void draw(){
  String filecolor[] = loadStrings("../../color.txt");

  port.write(filecolor[0]);
  
  println(filecolor[0]);
  delay(2000);
}
  static public void main(String[] passedArgs) {
    String[] appletArgs = new String[] { "process" };
    if (passedArgs != null) {
      PApplet.main(concat(appletArgs, passedArgs));
    } else {
      PApplet.main(appletArgs);
    }
  }
}
