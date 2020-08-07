<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://use.fontawesome.com/be0219ed33.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url('/assets/img/dice-background.jpg');
        background-repeat: no-repeat;
        background-size: fill;
        background-position: center;
        height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
        margin-top: 250px;
        max-width: 600px;
        height: auto;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
    }
    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }
</style>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ route('home.play') }}" method="get">
                            <h3 class="text-center text-info">Simple Configuration</h3>
                            <div class="row">
                                @if($errors->any())
                                    <div class="col-md-12 text-danger bg-warning">
                                        <span class="text-danger">{!! $errors->first() !!}</span>
                                    </div>
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_player" class="text-info">Total Player:</label><br>
                                        <input type="number" name="total_player" id="total_player" class="form-control" value="2" min="2" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="total_dice" class="text-info">Total Dice:</label><br>
                                        <input type="number" name="total_dice" id="total_dice" class="form-control" value="2" min="2" required>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" style="width: 100%;"><i class="fa fa-play"></i> Play Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
