using System.Numerics;

string[] values = { "12.3", "45", "ABC", "11", "DEF" };
int result = 0;
int Total = 0;
string Message = "";
string ABC = "";

foreach (string i in values)
{
    if (int.TryParse(i, out result))
    {
        Console.WriteLine($"Integer: {result}");
        
    }
    else
    {
        ABC += i;
    }

    Total += result;
    Message += ABC;
}

Console.WriteLine($"{Total}");
Console.WriteLine($"{Message}");