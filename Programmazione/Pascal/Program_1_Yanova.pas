var n,t,at,bt,A1,A2,B,i:integer;
begin
readln(n);
readln(t);
readln(at,bt);
B:=t+bt; A1:=t+at; A2:=t+at; 
for i:=2 to n do begin
 readln(at,bt);
 b:=b+bt;
 a1:=a1+bt;
 a2:=a2+at;
 if a2<a1 then
  a1:=a2;
end;
if a1<b then
 writeln(a1)
else writeln(b);
end.