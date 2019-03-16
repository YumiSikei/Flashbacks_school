const N=30;
var a: array [1..N] of integer;
    i, j, min1, min2, s: integer;
begin
 
 for i:=1 to N do readln(a[i]);
 if a[1]>a[2] then 
  s:=a[1]-a[2]
 else s:=a[2]-a[1];
 min1:=1;
 min2:=2;
 for i:=1 to N-1 do
  for j:=i+1 to N do begin
   if a[i]>a[j] then 
    if s>(a[i]-a[j]) then begin
     s:=a[i]-a[j];
     min1:=i;
     min2:=j;
    end;
   if a[i]<=7a[j] then 
    if s>(a[j]-a[i]) then begin
     s:=a[j]-a[i];
     min1:=i;
     min2:=j;
    end;
   end;
 writeln(min1,' ',min2);
 end.