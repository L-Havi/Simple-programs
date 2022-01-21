import java.util.Scanner;

class radiuscalc{
	public static void main(String[] args){
  	Scanner scanner = new Scanner(System.in);
	System.out.println("Calculate surface area and perimeter of a circle or rectangle? (c/r)");
	char option = scanner.nextChar();
	if (option == 'c'){
		System.out.println("Input radius of the circle");
		double radius = scanner.nextDouble();
		if (radius == 0){
			System.out.println("Radius not valid");
		}
		else{
		double surface = (Math.PI * (radius * radius));
		double perimeter = (2 * Math.PI * sade);
		System.out.println("Circle's surface area is " + surface + " squares and perimeter is " + perimeter);
		}
	}
	else if	(option == 'r'){
		System.out.println("Input rectangle's long side");
		double side1 = scanner.nextDouble();
		System.out.println("Input rectangle's short side");
		double side2 = scanner.nextDouble();
		if(side1 == 0 || side2 == 0){
			System.out.println("Input not valid");
		}
		else{
		double surface = (side1 * side2);
		double perimeter = ((side1 * 2) + (side2 * 2));
		System.out.println("Rectangle's surface area is " + surface + " and perimeter is " + perimeter);
		}
	}
	else{
		System.out.println("Wrong character");
	}
	}
}
