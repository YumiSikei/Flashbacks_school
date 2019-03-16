var mes, chis: integer;
begin
 readln(mes);
 readln(chis);
 while mes<13 do begin
  if mes mod 2=1 then begin
   while chis<31 do begin
    writeln(mes,' ',chis);
    chis:=chis+7;
   end;
  chis:=chis-30;
  end;
  
  if mes mod 2=0 then begin
   while chis<32 do begin
    writeln(mes,' ',chis);
    chis:=chis+7;
   end;
  chis:=chis-31;
  end; 
  mes:=mes+1;
 end;
end.