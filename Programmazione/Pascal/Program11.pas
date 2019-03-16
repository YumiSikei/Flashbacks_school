program fg;
const N = 3;
var aBooks: array[1..N] of record 
    surname: string[40]; 
    name:  string[80]; 
    year:   integer;	
    sex:  char;    
  end;
  i: integer;
begin
for i:=1 to N do begin
  readln(aBooks[i].surname); 
  readln(aBooks[i].name); 
  readln(aBooks[i].year); 
  readln(aBooks[i].sex); 
 end;
for i:=1 to N do
 if ((aBooks[i].year < 1998) and (aBooks[i].sex='m')) then
  writeln(aBooks[i].surname,'.',aBooks[i].name,'.',aBooks[i].year,'.',aBooks[i].sex); 
end.