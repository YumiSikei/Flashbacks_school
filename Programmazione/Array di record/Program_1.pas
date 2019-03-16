program qq;
   const N =43 ;
var i, g,j,R,t: integer;
s,m,k: string;
  f: text; 
    A: array[1..N] of record
    surname: string[40]; 
    name:  string[80]; 
    russian:  integer;	
    math:  integer;   
    phis:  integer; 
  end;
 procedure Sort ( first, last: integer); 
  var j,L,R: integer;
  t,f: string;
begin
  if first < last then begin
   f:= A[(first + last) div 2].surname;
    L:= first ; R:= last ;
while L <= R do begin
   while A[L].surname < f do L:= L + 1;
   while A[R].surname > f do R:= R - 1;
   if L <= R then begin
     t:= A[R].surname; A[R].surname:= A[L].surname; A[L].surname:= t;
     t:= A[R].name; A[R].name:= A[L].name; A[L].name:= t;
     j:= A[R].russian; A[R].russian:= A[L].russian; A[L].russian:= j;
     j:= A[R].math; A[R].math:= A[L].math; A[L].math:= j;
     j:= A[R].phis; A[R].phis:= A[L].phis; A[L].phis:= j;
     L:= L + 1; R:= R - 1;
   end;
 end;
    Sort(first, R);   Sort(L, last);
  end;
end;
 
begin
   assign(f, 'input.txt');
   reset(f);
   g:=1;
   t:=1;
for j:=0 to N-1 do begin
  readln(f, s);
  writeln(s);
  for i:=1 to length(s) do begin
   if s[i]=' ' then 
    t:=t+1;
   writeln(g,' ',i-1);
   if (t=1) and (s[i]=' ')then
    A[j].surname:=copy(s,g,(i-1));
   if (t=2) and (s[i]=' ')then
    A[j].name:=copy(s,g,i-g);
   if (t=3) and (s[i]=' ')then begin
    m:=copy(s,g,i-g);
    val(m,A[j].russian,R);
   end;
   if (t=4) and (s[i]=' ')then begin
    m:=copy(s,g,i-g);
    k:=copy(s,i+1,length(s)-i);
    val(m,A[j].math,R);
    val(k,A[j].phis,R);
   end;
   g:=i+1;
   t:=0;
  end;
end;

   close(f);  
   Sort ( 1, N);
   for i:=1 to N do
     writeln(A[i].surname, ' ', A[i].name, ' ', A[i].russian, ' ', A[i].math, ' ', A[i].phis);  
end.
