string? readResult;
int numericValue = 0;
bool validNummer = false;


Console.WriteLine("Vul een geheel getal in tusseen de 5 en 10.");

do
{
    readResult = Console.ReadLine();
    if (int.TryParse(readResult, out numericValue))
    {
        if (numericValue >= 5 && numericValue <= 10)
        {
            Console.WriteLine($"Your input value {numericValue} has been accepted.");
            validNummer = true;
        }
        
        else
        {
            Console.WriteLine($"You entered {numericValue}. Please enter a number between 5 and 10.");
        }

    } else
    {
        Console.WriteLine("Sorry, you entered an invalid number, please try again");
    }
} while (validNummer == false);