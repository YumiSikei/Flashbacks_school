const N=30;
var a: array [1..N] of integer;
    i, j, min1, min2, s: integer;
begin
 
 for i:=1 to N do readln(a[i]);
 s:=a[1]+a[2];
 for i:=1 to N-1 do
  for j:=i+1 to N do 
   if s>(a[i]+a[j]) then begin
    s:=a[i]+a[j];
    min1:=i;
    min2:=j;
   end;
 writeln(min1,' ',min2);
 end.