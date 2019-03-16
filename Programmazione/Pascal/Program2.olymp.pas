var A, B, C, s, k: integer;
begin
 readln(A);
 readln(B);
 readln(C);
s:=0; k:=0;
 while (A>0) and (B>0) and (C>0) do begin
  A:=A-1;
  B:=B-1;
  C:=C-1;
  s:=s+3;
  if B>0 then begin
   B:=B-1;
   s:=s+1;
  end
  else k:=1;
 end;

 if k=0 then
  if A>0 then begin
   A:=A-1;
   s:=s+1;
   if B>0 then begin
    B:=B-1;
    s:=s+1;
   end;
  end;
 writeln(s);
end.