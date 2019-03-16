var N, minpr, i, j, k: integer;
   a:array[1..9999] of integer;
begin
 readln(N);
 for i:=1 to N do
  readln(a[i]);
 minpr:=a[1]*a[2];
 for i:=1 to (N-1) do 
  for j:=i+1 to N do begin
   k:=a[i]*a[j];
   if k<minpr then
    minpr:=k;
  end;
 writeln(minpr);
   
end.