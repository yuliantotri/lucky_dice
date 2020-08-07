<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Lucky Dice - Play</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" integrity="sha512-LhZScx/m/WBAAHyiPnM+5hcsmCMjDDOgOqoT9wyIcs/QUPm6YxVNGZjQG5iP8dhWMWQAcUUTE3BkshtrlGbv2Q==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js" integrity="sha512-aDa+VOyQu6doCaYbMFcBBZ1z5zro7l/aur7DgYpt7KzNS9bjuQeowEX0JyTTeBTcRd0wwN7dfg5OThSKIWYj3A==" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/be0219ed33.js"></script>
    {{-- <link href="/assets/plugins/dice3d/dist/dice3d.css" rel="stylesheet"> --}}
    <script src="/assets/plugins/roll-a-die/dist/roll-a-die.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg==" crossorigin="anonymous"></script>
    <style>
        .float{
            position:fixed;
            /* width:60px; */
            padding: 0 20px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#ff3f3f;
            color:#FFF;
            border-radius:25px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float{
            margin-top:22px;
        }
    </style>
    <body style="background-color: #f2f5f7;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="col-md-1">
                        <a href="/" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back to configuration</a>
                    </div>
                    <div class="col-md-11">
                        <h1><i class="fa fa-play"></i> Lucky Dice</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    @for ($i = 0; $i < $input['total_player']; $i++)
                        <div class="row" id="player_{{ $i+1 }}" style="border: 1px solid ced7db; border-radius: 25px; margin: 5px; padding: 10px 20px 20px 20px; background-color: #d8d8d8;">
                            <div class="col-md-3 text-center">
                                <h3>Player {{ $i+1 }}</h3>
                                <img src="/assets/img/users/user_{{ substr($i, -1) }}.jpg" class="img img-thumbnail img-fluid" alt="avatar" style="width: 150px;">
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12 dice-field player-dice-{{ $i+1 }}" data-total_dadu="{{ $input['total_dice'] }}" data-point="0" data-player_id='{{ $i+1 }}' data-player_name="Player {{ $i+1 }}" data-temp_dadu="0" data-active="1" data-point="0">
                                </div>
                                <div class="col-md-12 roll-the-dice"></div>
                            </div>
                            <div class="col-md-3">
                                <div class="col-md-12 text-center"><h4>Point</h4></div>
                                <div class="col-md-12 text-center">
                                    <span class="player-dice-{{ $i+1 }}-point" style="font-size: 100px;">0</span>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Leaderboard (Demo)</h2>
                        </div>
                        <div class="col-md-12">
                            @for ($i = 0; $i < $input['total_player']; $i++)
                                <div class="row" id="player_{{ $i+1 }}" style="border-bottom: 1px solid #ced7db; margin: 5px; border-radius: 10px; background-color: #d8d8d8;">
                                    <div class="col-md-1 text-center">
                                        <h4>{{ $i+1 }}.</h4>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <img src="/assets/img/users/user_{{ substr($i, -1) }}.jpg" class="img img-fluid" alt="avatar" style="width: 40px;">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Player {{ $i+1 }}</h4>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="col-md-12 text-center pt-3">
                            <h2>Log Point</h2>
                        </div>
                        <div class="col-md-12 bg-light overflow-auto log-point" style="height: 500px; border: 1px solid #c4c4c4;">

                        </div>
                        <div class="col-md-12 text-center pt-3">
                            <h2>Rules</h2>
                        </div>
                        <div class="col-md-12 bg-light overflow-auto log-point" style="height: auto; border: 1px solid #c4c4c4;">
                            <ol>
                                <li>Pada awal permainan, setiap pemain mendapatkan dadu sejumlah M unit.</li>
                                <li>Semua pemain akan melemparkan dadu mereka masing-masing secara bersamaan.</li>
                                <li>
                                    Setiap pemain akan mengecek hasil dadu lemparan mereka dan melakukan evaluasi
                                    seperti berikut:
                                    <ul>
                                        <li>Dadu angka 6 akan dikeluarkan dari permainan dan ditambahkan sebagai poin
                                            bagi pemain tersebut.</li>
                                        <li>Dadu angka 1 akan diberikan kepada pemain yang duduk disampingnya. Contoh, pemain pertama akan memberikan dadu angka 1 nya ke pemain kedua.</li>
                                        <li>Dadu angka 2,3,4 dan 5 akan tetap dimainkan oleh pemain.</li>
                                    </ul>
                                </li>
                                <li>
                                    Setelah evaluasi, pemain yang masih memiliki dadu akan mengulangi step yang ke-2
                                    sampai tinggal 1 pemain yang tersisa.
                                    <ul>
                                        <li>Untuk pemain yang tidak memiliki dadu lagi dianggap telah selesai bermain.</li>
                                    </ul>
                                </li>
                                <li>Pemain yang memiliki poin terbanyak lah yang menang.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <a href="#" class="float" id="roll-the-dice">
                <i class="fa fa-play my-float"> ROLL THE DICE & EVALUATE</i>
                </a>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                var time = 1000;
                var time2 = 1000;
                var imploded_str = '';
                var calculated = {};
                var player_id = '';
                var total_input_dadu = '{{ $input['total_dice'] }}';
                var total_input_player = '{{ $input['total_player'] }}';
                var first_time_click = 1;
                $('#roll-the-dice').click(function (e) {
                    e.preventDefault();
                    $.blockUI();
                    $.unblockUI();
                    if (first_time_click == 0) {
                        var is_final = calculate_total_dice();
                        if (is_final) {
                            return false;
                        }
                    }
                    first_time_click = 0;
                    $('.dice-field').each(function (index, element) {
                        var callback = function do_callback(dice_value){
                            setTimeout(() => {
                                imploded_str = dice_value.join(', ');
                                player_id = parseInt($(element).attr('data-player_id'));
                                calculated = calculate_dice_value(dice_value, player_id);
                                $(element).html('<strong>'+imploded_str+'</strong><br>');
                                $(element).attr('data-total_dadu', calculated.total_dadu);
                                $(element).attr('data-point', parseInt($(element).attr('data-point'))+calculated.point);
                                $('.log-point').append(calculated.string_message);
                                $('.player-dice-'+player_id+'-point').html($(element).attr('data-point'));
                            }, 1000);
                            time2+=1000;
                        };
                        if (parseInt($(element).attr('data-active')) == 1) {
                            setTimeout(() => {
                                $('html, body').animate({
                                    scrollTop: $(element).offset().top - ($(element).height() / 2)
                                }, 500)
                                rollADie({ element, numberOfDice: parseInt($(element).attr('data-total_dadu')), callback});
                            }, time);
                            time+=1000;
                        }
                    });

                    time2 = 1000;
                    time = 1000;
                });

                function calculate_total_dice() {
                    var total_player_active = 0;
                    var player_point_terbanyak = '';
                    var last_player = '';
                    var total_point = 0;
                    $('.dice-field').each(function (index, element) {
                        $(element).attr('data-total_dadu', parseInt($(element).attr('data-total_dadu'))+parseInt($(element).attr('data-temp_dadu')));
                        $(element).attr('data-temp_dadu', 0);
                        if (parseInt($(element).attr('data-total_dadu')) == 0) {
                            $(element).attr('data-active', 0);
                            $(element).html('Tidak bisa melanjutkan permainan karena <b>kehabisan dadu</b>.<br>');
                        }else{
                            last_player = $(element).attr('data-player_id');
                            total_player_active++;
                        }
                        if (parseInt($(element).attr('data-point')) > total_point) {
                            total_point = parseInt($(element).attr('data-point'));
                            player_point_terbanyak = $(element).attr('data-player_id');
                        }
                    });
                    if (total_player_active <= 1) {
                        Swal.fire({
                            title: '<strong>Yeayy, Finally !!</strong>',
                            icon: 'info',
                            html:
                                'Permainan berakhir karena hanya <b>'+$('.player-dice-'+last_player).attr('data-player_name')+'</b> yang memiliki dadu, Pemenang point terbanyak adalah <b>'+$('.player-dice-'+player_point_terbanyak).attr('data-player_name')+'</b> dengan total point <b>'+$('.player-dice-'+player_point_terbanyak).attr('data-point')+'</b>',
                            showCloseButton: false,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText:
                                '<i class="fa fa-thumbs-up"></i> Awesome!',
                        })
                        return true;
                    }
                    return false;
                }

                function calculate_dice_value(dice_value, player_id) {
                    var hasil = {
                        point: 0,
                        total_dadu: dice_value.length,
                        total_angka_enam: 0,
                        total_angka_satu: 0,
                        string_message: '',
                        array_message: '',
                    };
                    $.each(dice_value, function (indexInArray, valueOfElement) {
                        if (valueOfElement == 6) {
                            hasil.total_angka_enam++;
                        }
                        if (valueOfElement == 1) {
                            hasil.total_angka_satu++;
                        }
                    });
                    hasil.point += hasil.total_angka_enam;
                    hasil.point += hasil.total_angka_satu;
                    hasil.total_dadu -= hasil.total_angka_enam;
                    hasil.total_dadu -= hasil.total_angka_satu;

                    if (hasil.total_angka_enam != 0) {
                        hasil.string_message = '- <strong>Player '+player_id+'</strong> memiliki dadu angka <strong>6</strong> sebanyak <strong>'+hasil.total_angka_enam+'</strong> dadu. Dadu tersebut dikeluarkan dari permainan dan ditambahkan sebagai poin untuk <strong>Player '+player_id+'</strong><br>';
                    }

                    if (hasil.total_angka_satu != 0) {
                        var total_player = '{{ $input['total_player'] }}';
                        var penerima_temp_dadu = '';
                        for (let index = 1; index <= total_player; index++) {
                            if ((player_id+index) <= total_player) {
                                if ($('.player-dice-'+(player_id+index)).attr('data-active') == 1) {
                                    hasil.string_message = '- <strong>Player '+player_id+'</strong> memiliki dadu angka <strong>1</strong> sebanyak <strong>'+hasil.total_angka_satu+'</strong> dadu. Dadu tersebut diberikan kepada <strong>Player </strong> dari permainan dan ditambahkan sebagai poin untuk <strong>Player '+player_id+'</strong><br>';
                                    $('.player-dice-'+(player_id+index)).attr('data-temp_dadu', parseInt($('.player-dice-'+(player_id+index)).attr('data-temp_dadu')+hasil.total_angka_satu));
                                    penerima_temp_dadu = (player_id+index);
                                    break;
                                }
                            }else{
                                if ($('.player-dice-'+((player_id+index)-total_player)).attr('data-active') == 1) {
                                    hasil.string_message = '- <strong>Player '+player_id+'</strong> memiliki dadu angka <strong>1</strong> sebanyak <strong>'+hasil.total_angka_satu+'</strong> dadu. Dadu tersebut diberikan kepada <strong>Player </strong> dari permainan dan ditambahkan sebagai poin untuk <strong>Player '+player_id+'</strong><br>';
                                    $('.player-dice-'+((player_id+index)-total_player)).attr('data-temp_dadu', parseInt($('.player-dice-'+((player_id+index)-total_player)).attr('data-temp_dadu')+hasil.total_angka_satu));
                                    penerima_temp_dadu = ((player_id+index)-total_player);
                                    break;
                                }
                            }
                        }
                    }

                    if (hasil.total_angka_enam != 0 && hasil.total_angka_satu != 0) {
                        hasil.string_message = '- <strong>Player '+player_id+'</strong> memiliki dadu angka <strong>1</strong> sebanyak <strong>'+hasil.total_angka_satu+'</strong> dadu dan dadu angka <strong>6</strong> sebanyak <strong>'+hasil.total_angka_enam+'</strong> dadu. Total dadu angka <strong>1</strong> tersebut diberikan kepada <strong>Player '+penerima_temp_dadu+'</strong> dari permainan dan ditambahkan sebagai poin untuk <strong>Player '+player_id+'</strong><br>';
                    }

                    return hasil;
                 }
            });
        </script>
    </body>
</html>
