# lucky_dice

Installation
1. Pull entire code in this git.
2. run composer install
3. run npm install
4. rename .env.example to .env
5. run php artisan serve

NB : run in your command line, make sure you already installed composer cli and npm cli first.
NB : this application doesnt require any DB connection. just play simply and faster

Rules :<br />
    EN : <br />
        1. At the start of the game, each player gets a dice of M units.<br />
        2. All players will roll their respective dice at the same time<br />
        3. Each player will check the results of their dice rolls and evaluate<br />
        as follows:<br />
        a. Dice number 6 will be removed from the game and added as points<br />
        for the player.<br />
        b. Dice number 1 will be awarded to the player sitting next to him.<br />
        For example, the first player will give the dice the number 1 to the second player.<br />
        c. Dice numbers 2,3,4 and 5 will still be played by the player.<br />
        4. After the evaluation, the player who still has the dice will repeat the 2nd step<br />
        until only 1 player remains.<br />
        a. Players who have no more dice are considered to have finished playing.<br />
        5. The player who has the most points wins.<br />
        ID :<br />
        1. Pada awal permainan, setiap pemain mendapatkan dadu sejumlah M unit.<br />
        2. Semua pemain akan melemparkan dadu mereka masing-masing secara bersamaan<br />
        3. Setiap pemain akan mengecek hasil dadu lemparan mereka dan melakukan evaluasi<br />
        seperti berikut:<br />
        a. Dadu angka 6 akan dikeluarkan dari permainan dan ditambahkan sebagai poin<br />
        bagi pemain tersebut.<br />
        b. Dadu angka 1 akan diberikan kepada pemain yang duduk disampingnya.<br />
        Contoh, pemain pertama akan memberikan dadu angka 1 nya ke pemain kedua.<br />
        c. Dadu angka 2,3,4 dan 5 akan tetap dimainkan oleh pemain.<br />
        4. Setelah evaluasi, pemain yang masih memiliki dadu akan mengulangi step yang ke-2<br />
        sampai tinggal 1 pemain yang tersisa.<br />
        a. Untuk pemain yang tidak memiliki dadu lagi dianggap telah selesai bermain.<br />
        5. Pemain yang memiliki poin terbanyak lah yang menang.<br />
