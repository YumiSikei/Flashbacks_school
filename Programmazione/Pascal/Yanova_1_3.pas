var s,s1,s2: string;
i,j,n,g,h: integer;
begin
 writeln('������� ���������� �����');
 read(n);

 if n>0 then
  for g:=1 to n do
  begin
   writeln;
   writeln('������� �������, ���, ��������');
   read(s);
   i:=length(s);
   j:=pos(' ',s);
   s2:=copy(s,1,j);
   s1:=s[j+1];
   write(s1,'.');
   delete(s,1,j);
   
   j:=pos(' ',s);
   s1:=s[j+1];
   write(s1,'. ',s2);
  end
 else writeln('��,��!');
end.
   