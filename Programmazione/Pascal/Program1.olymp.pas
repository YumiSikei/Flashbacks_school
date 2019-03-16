var N, M, s: longint;
begin
 readln(N);
 readln(M);
 s:=M mod N;
 if s>0 then
  writeln(s)
 else writeln(N);
end.