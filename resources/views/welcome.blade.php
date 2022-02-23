<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MpesaIntegration</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
</head>
<body>
    <div class="container ">
        <div class="col-sm-8 mx-auto mt-5">
            <div class="card mb-3">
                <div class="card-header">
                    Request Access Token
                </div>
                <div class="card-body">
                    <h4 id="access_token"></h4>
                    <div id="RequestToken" class="btn btn-primary">Request Access Token</div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    Request For URL
                </div>
                <div class="card-body">
                    <div id="RequestUrl" class="btn btn-primary">Request URL</div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">
                    Simulate Transaction
                </div>
                <div class="card-body">
                    <form action="">
                      <div class="form-group mb-3">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" name="amount">
                      </div>
                      <div class="form-group mb-3">
                        <label for="accout">Account</label>
                        <input type="text" class="form-control" name="account">
                      </div>
                    </form>
                    <div id="SimulateTransaction" class="btn btn-primary">Simulate Transaction</div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
