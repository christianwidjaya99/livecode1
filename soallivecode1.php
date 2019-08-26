/**
Buatlah sebuah algoritma untuk kasus berikut:
Seorang pengajar sedang memeriksa ujian mahasiswa dan akan memberikan desc nilai dari A-E dengan ketentuan sebagai berikut:
 - Nilai 80 - 100: A
 - Nilai 65 - 79: B
 - Nilai 50 - 64: C
 - Nilai 35 - 49: D
 - Nilai 0 - 34: E

 Tampilkan desc nilai dan nama siswa saat pengajar tersebut memasukkan nilai dan nama yang dia inginkan.

NOTED:
Jika nilai mahasiswa kurang dari 0 atau lebih dari 100 maka tampilkan 'Nilai Invalid'
**/

START
STORE "nilai" = 0-100
STORE "$nama" = string
IF ("nilai" = 80-100;) 
THEN 
DISPLAY "score $nama A";

ELSEIF ("nilai" = 65-79;)
THEN
DISPLAY "score $nama B";

ELSEIF ("nilai = 50-64;")
THEN
DISPLAY "score $nama C";

ELSEIF ("nilai" = 35-49;)
THEN
DISPLAY "score $nama D";

ELSEIF ("nilai" = 0-34;)
THEN
DISPLAY "score $nama E";

ELSE
DISPLAY 'Nilai Invalid'
END