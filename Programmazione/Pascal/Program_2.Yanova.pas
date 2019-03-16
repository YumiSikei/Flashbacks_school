program pr2;
var i,c:integer;
n:char;
a:array[0..25] of integer;
s:string;
begin
readln(s);
c:=0;
for i:=0 to 25 do a[i]:=0;
i:=1;
while s[i] <> '.' do begin
 if s[i] <> ' ' then begin
  if (ord(s[i]) >= ord('a')) and (ord(s[i]) <= ord('z')) then 
   a[ord(s[i]) - ord('a')]:=a[ord(s[i]) - ord('a')]+1
  else a[ord(s[i]) - ord('A')]:=a[ord(s[i]) - ord('A')]+1;
 end;
 i:=i+1;
end;
c:=-1;
for i:=0 to 25 do begin
 if c=-1 then begin
  c:=a[i];
  n:=chr(ord('a') + i);
 end
 else if c<a[i] then begin
  c:=a[i];
  n:=chr(ord('a')+i);
 end;
end;
writeln(chr(ord(n)-ord('a')+ord('A')),' ',c);
end.