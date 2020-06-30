import java.util.Date;
import java.util.Scanner;

public class firstSection{
    public static void main(final String[] args) {
        System.out.println("Welcome to ScholarPlus - School Management System");
        Date clock = new Date();
        System.out.println("The system current time is: ");
        System.out.println(clock.toString());
        Scanner keyboard = new Scanner(System.in);
        System.out.println("Please, type the student name: ");
        String averageTitle = keyboard.nextLine();
        System.out.println("Now, type the student average: ");
        float averageValue = keyboard.nextFloat();
        System.out.println();
        System.out.printf("The %s student average is %.2f: \n", averageTitle, averageValue);
        String completedProjects = "10";
        int projects = Integer.parseInt(completedProjects);
        System.out.printf("The month completed projects quantity is = %d", projects);
    }
}