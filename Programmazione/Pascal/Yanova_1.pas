var s,s1: string;
i,n,g,h,max: integer;
begin
  writeln('¬ведите вашу строку');
  read(s);
  writeln;
n:=length(s); 
h:=0;
max:=-1; 
s1:='';
 for i:=1 to n do
   if s[i] in ['0'..'9'] then
    h:=h+1;
 
 for g:=1 to h do
  begin
   for i:=1 to n do
    if (s[i] in ['0'..'9']) and ((ord(s[i])-ord('0'))>max) then
      begin
      max:=ord(s[i])-ord('0');       
      end;
   
   for i:=1 to n do
    if ord(s[i])-ord('0')=max then
      begin
       s1:=s1+s[i];
       delete(s,i,1);
       max:=-1;
      end;
    n:=length(s); 
  end;
  
  writeln(s1);
  
end.
   