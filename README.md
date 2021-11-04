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
    EN : 
        1. At the start of the game, each player gets a dice of M units.
        2. All players will roll their respective dice at the same time
        3. Each player will check the results of their dice rolls and evaluate
        as follows:
        a. Dice number 6 will be removed from the game and added as points
        for the player.
        b. Dice number 1 will be awarded to the player sitting next to him.
        For example, the first player will give the dice the number 1 to the second player.
        c. Dice numbers 2,3,4 and 5 will still be played by the player.
        4. After the evaluation, the player who still has the dice will repeat the 2nd step
        until only 1 player remains.
        a. Players who have no more dice are considered to have finished playing.
        5. The player who has the most points wins.
    ID :
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
