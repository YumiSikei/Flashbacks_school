var a,b,n,r,i: integer;
begin
a:=0; b:=0;
readln(n);
for i:=1 to n do begin
 readln(r);
 if (r mod 2=0) and (r>a) then
  a:=r;
 if (r mod 2=1) and (r>b) then
  b:=r;
end;
if (a=0) or (b=0) then begin
 writeln('-1');
 writeln('Контроль не пройден');
end
else begin
 writeln(a+b);
 writeln('Контроль пройден');
end;
end.