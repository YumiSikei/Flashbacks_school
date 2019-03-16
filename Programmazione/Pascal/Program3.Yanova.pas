const N=5;
var a: array [1..N] of integer;
    i, j, k, imax, kmax, s: integer;
begin
 
 for i:=1 to N do readln(a[i]);
 k:=0;
 kmax:=0;
 for i:=1 to N do begin
  for j:=1 to a[i] do
   if a[i] mod j=0 then 
    k:=k+1;
  if k>kmax then begin
   kmax:=k;
   imax:=i;
  end;
  k:=0;
 end;
 writeln(imax);
 end.