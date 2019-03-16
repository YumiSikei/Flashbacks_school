var 
a:array[1..9] of integer; 
i,j,n,q,l,w,p:integer; 
s:string; 
begin 
readln(n,q); 
for i:=1 to 9 do 
a[i]:=-1; 
for i:=1 to q do begin 
readln(s); 
j:=pos(' ',s); 
delete(s,1,j); 
j:=pos(' ',s); 
delete(s,1,j); 
l:=strtoint(copy(s,1,1)); 
delete(s,1,2); 
w:=strtoint(s); 
for p:=l to w-1 do 
a[p]:=a[p]+1; 
end; 
j:=a[1]; 
for i:=1 to n do begin 
if (a[i]<j)and(a[i]<>-1) then 
j:=a[i]; 
end; 
for i:=1 to n do 
if a[i]=j then 
writeln(i,'-', i+1); 
end.