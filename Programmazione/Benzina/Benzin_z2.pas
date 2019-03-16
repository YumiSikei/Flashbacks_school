var
  i, err: integer;
  average, hm, n, sum: real;
  f: text;
  s: string;
  benz: array[1..99] of record
    area: string;
    add: string;
    price: real;
  end;

begin
  assign(f, 'benzin.txt');
  reset(f);
  i := 1;
  sum := 0;
  while not Eof(f) do
  begin
    readln(f, s);
    delete(s, 1, pos('#', s));
    benz[i].area := copy(s, 1, pos('#', s) - 1);
    delete(s, 1, pos('#', s));
    benz[i].add := copy(s, 1, pos('#', s) - 1);
    delete(s, 1, pos('#', s));
    Val(s, n, err);
    benz[i].price := n;
    sum := sum + n;
    i := i + 1;
  end;
  average := sum / 99;
  for i := 1 to 99 do
  begin
    if (abs(benz[i].price - average) / (average / 100) <= 1) and (benz[i].area = 'Центральный  АО') then begin
      writeln(benz[i].add);
      hm := hm + 1;
    end;
  end;
  writeln(hm);
  close(f);
end.