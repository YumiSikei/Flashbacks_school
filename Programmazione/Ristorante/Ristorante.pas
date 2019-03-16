var
s: array[1..1000] of integer;
f: text;
t1,t2,i,j,n,h,m,R: integer;
tr,str: string;
begin
assign(f,'input.txt');
reset(f);
readln(f,str);
delete(str,1,pos(' ',str));
val(str,n,R);
while(not eof(f)) do
begin
readln(f,str);
write(copy(str,1,pos(' ',str)),' ');//выписываем фамилию
delete(str,1,pos(':',str)-3);//оставляем в строке только время
tr:=copy(str,1,2);//копируем часы прихода
val(tr,h,R);//сохраняем их в счетчике
tr:=copy(str,4,2);//копируем минуты прихода
val(tr,m,R);//сохраняем их в счетчике
t1:=h*60+m;//сохраняем время прихода в счетчике
tr:=copy(str,7,2);//копируем часы ухода
val(tr,h,R);//сохраняем их в счетчике
tr:=copy(str,10,2);//копируем минуты ухода
val(tr,m,R);//сохраняем их в счетчике
t2:=h*60+m;//сохраняем время ухода в счетчике
i:=1;
while t1<s[i] do
i:=i+1;
if(i<=n) then begin
s[i]:=t2;
writeln(i);
end
else
write(0);
end;
close(f);
end.