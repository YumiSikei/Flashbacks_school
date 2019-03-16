program qq;
var i, x: integer;
s: string;
    f: text; 
begin
   assign(f, 'input1.txt');
   reset(f);
while not eof(f) do begin
  readln(f, s); 
  for i:=1 to length(s) do begin
   if s[i]=' '
end;
   close(f);   
writeln( 'Сумма чисел ', s);   
end.
