const string input = "<div><h2>Widgets &trade;</h2><span>5000</span></div>";

string output = "";

const string openSpan = "<span>";
const string closeSpan = "</span>";
const string openDiv = "<div>";
const string closeDiv = "</div>";

int openingPosition = input.IndexOf(openSpan);
int closingPosition = input.IndexOf(closeSpan);

openingPosition += openSpan.Length;
int length = closingPosition - openingPosition;

string quantity = input.Substring(openingPosition, length);


int startOpenDiv = input.IndexOf(openDiv);
startOpenDiv += 1;
int startCloseDiv = input.IndexOf(closeDiv);
startCloseDiv += 1;

output = input.Remove(startCloseDiv, openDiv.Length);
output = output.Remove(startOpenDiv, closeDiv.Length);

Console.WriteLine($"Quantity: {quantity}");
Console.WriteLine($"Output: {output}");