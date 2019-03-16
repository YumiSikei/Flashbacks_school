var N, nov, i, j, k, s, m, g, l: integer;
   a:array[1..100] of integer;
begin
 readln(N); s:=0; nov:=0; g:=0;
 while N>0 do begin
  g:=g+1;
  N:=N div 10;
 end;
 for i:=g downto 1 do begin
  a[i]:=N mod 10;
  N:=N div 10;
 end;
 k:=1;
 while a[k]=9 do begin
  j:=a[k+1];
  k:=k+1;
 end;
 for i:=1 to g do
  s:=s+a[i];
 s:=s-a[k];
 m:=a[k]+s;
 l:=a[k];
 for i:=j to 9 do
  if (m mod 3=0) and (l<i) then begin
   l:=i;
  end;
 a[k]:=l;
 for i:=1 to g do
  nov:=nov*10+a[i];
 writeln(nov);
end.