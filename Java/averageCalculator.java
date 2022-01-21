import java.util.Scanner;
class average{
	public static void main(String[] args){
  Scanner scanner = new Scanner(System.in);
	double count = 0;
	double values = 0;
	boolean add = true;
	do{
		  System.out.println("Give a value");
		  values = values + scanner.nextDouble();
		  count++;
		  System.out.println("More values? (y/n)?");
		  char yesno = scanner.nextChar();
		  if(yesno == 'n'){
			add = false;
		}
	} while(add == true);
	double an = (values / count);
	System.out.print("Your average number is: " + an);
	}
}
