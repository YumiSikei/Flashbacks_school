var SR,SL:string;
m:array[0..9] of integer;
a,b,c,i,j,k,d:integer;
h:char;
begin
b:=0; c:=-1; d:=0; SL:=''; SR:=''; k:=-1;

for i:=0 to 9 do
 m[i]:=0;
read(h);
while h<>'.' do begin
 if (ord(h)-ord('0')>=0) and (ord(h)-ord('0')<=9) then
  m[ord(h)-ord('0')]:=m[ord(h)-ord('0')]+1;
 read(h);
 end;  
for i:=0 to 9 do
 if m[i] mod 2=1 then
  b:=b+1; 
if b>1 then
 writeln('NO')
else begin 
 for i:=1 to 9 do
  if m[i] mod 2=1 then
   c:=m[i];
 for i:=0 to 9 do
  if (m[j]>0) and (m[i] mod 2=0) then
   d:=d+1;
 if (c=1) and (d=1) and (m[0]>1) then
  writeln('NO')
 else begin
  for i:=0 to 9 do
  begin
   for j:=1 to (m[i] div 2) do begin
    SL:=i+SL;
    SR:=SR+i; end;
   if m[i] mod 2=1 then
    k:=i;
  end;
  writeln('YES');
  write(SL);
  if k>-1 then
   write(k);
  writeln(SR);
 end;
 end;
end.