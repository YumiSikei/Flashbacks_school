var m,i,j,k: integer;
srg,otkl,sum: real;
a:string;
b:array[1..12] of real;
begin 
sum:=0; k:=0;
for i:=1 to 12 do
 b[i]:=0;
for i:=1 to 366 do begin
 read(a);
 j:=7;
 m:=10*(ord(a[3])-ord('0'))+ord(a[4])-ord('0');
 while j<(length(a)-1) do begin
  if a[j]='-' then
   k:=1;
  b[m]:=b[m]*10+ord(a[j])-ord('0');
  j:=j+1;
 end;
 b[m]:=b[m]+b[length(a)]/10;
 if k=1 then b[m]:=b[m]*(-1);
 sum:=sum+b[m];
 k:=0;
end;
srg:=sum/366;
 for i:=1 to 12 do begin
  if (i=1) or (i=3) or (i=5) or (i=7) or (i=8) or (i=10) or (i=12) then
   b[i]:=b[i]/31;
  if (i=4) or (i=6) or (i=9) or (i=11) then
   b[i]:=b[i]/30;
  if i=2 then
   b[i]:=b[i]/29;  
 end;
otkl:=abs(b[1]-srg);
for i:=2 to 12 do
 if abs(b[i]-srg)<otkl then begin
  otkl:=abs(b[i]-srg);
  m:=i;
 end;
writeln(m,' ',b[m],' ',otkl);
end.