var s,s1,s2: string;
i,j,n,g,h: integer;
begin
   writeln('Введите полное имя файла');
   read(s);
   writeln;
   j:=pos('\',s);
   if j<>0 then
   begin
    while j<>0 do
    begin
     s1:=copy(s,1,j-1);
     writeln(s1);
     delete(s,1,j);
     j:=pos('\',s);
    end;
    writeln(s);
   end
   else writeln(s);

end.
   