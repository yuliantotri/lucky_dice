# lucky_dice

Installation
1. Pull entire code in this git.
2. run composer install
3. run npm install
4. rename .env.example to .env
5. run php artisan serve

NB : run in your command line, make sure you already installed composer cli and npm cli first.
NB : this application doesnt require any DB connection. just play simply and faster

Rules :
1. Pada awal permainan, setiap pemain mendapatkan dadu sejumlah M unit.
2. Semua pemain akan melemparkan dadu mereka masing-masing secara bersamaan
3. Setiap pemain akan mengecek hasil dadu lemparan mereka dan melakukan evaluasi
seperti berikut:
a. Dadu angka 6 akan dikeluarkan dari permainan dan ditambahkan sebagai poin
bagi pemain tersebut.
b. Dadu angka 1 akan diberikan kepada pemain yang duduk disampingnya.
Contoh, pemain pertama akan memberikan dadu angka 1 nya ke pemain kedua.
c. Dadu angka 2,3,4 dan 5 akan tetap dimainkan oleh pemain.
4. Setelah evaluasi, pemain yang masih memiliki dadu akan mengulangi step yang ke-2
sampai tinggal 1 pemain yang tersisa.
a. Untuk pemain yang tidak memiliki dadu lagi dianggap telah selesai bermain.
5. Pemain yang memiliki poin terbanyak lah yang menang.
