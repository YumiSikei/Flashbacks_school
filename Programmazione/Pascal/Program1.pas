var 
ch,m,ch1,m1,i,n,p,k:integer; 
s:string; 
a:array[1..1000] of integer;
begin 
readln(s); 
ch:=(ord(s[1])-ord('0'))*10+(ord(s[2])-ord('0'));
m:=(ord(s[4])-ord('0'))*10+(ord(s[5])-ord('0'));
readln(n);
p:=0; k:=0;
for i:=1 to n do
begin
 readln(s);
 while s[1]<>' ' do
 begin
  p:=p*10+(ord(s[1])-ord('0'));
  delete(s,1,1);
 end;
 ch1:=(ord(s[2])-ord('0'))*10+(ord(s[3])-ord('0'));
 m1:=(ord(s[5])-ord('0'))*10+(ord(s[6])-ord('0'));
 if ((m>m1) and ((ch>3) or (m-m1>1))) or ((m=m1) and (ch-ch1>3)) then begin
  k:=k+1;
  a[k]:=p; end
 else begin
  if (m1=1) or (m1=3) or (m1=5) or (m1=7) or (m1=8) or (m1=10) then
   if (ch+31-ch1)>3 then
    begin
    k:=k+1;
    a[k]:=p; end;
  if (m1=4) or (m1=6) or (m1=9) or (m1=11) then
   if (ch+30-ch1)>3 then
    begin
    k:=k+1;
    a[k]:=p; end;
  if m1=2 then
   if (ch+28-ch1)>3 then
    begin
    k:=k+1;
    a[k]:=p; end;
  end;
  p:=0;
end;
for i:=1 to k do 
 writeln(a[i]);
end.