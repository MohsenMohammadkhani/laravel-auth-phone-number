<!doctype html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Login Form</title>
</head>

<body class="bg-secondary">

    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-4 pt-3">
                <div class="card">
                    <div class="card-body">

                        @isset($message)
                        <div class="alert alert-danger">
                            <p>
                                {{ $message }}
                            </p>
                        </div>
                        @endisset

                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <label>کد داخل sms خود را وارد کنید.</label>
                                <input type="number" name="sms-code" class="form-control" placeholder="کد اس ام اس">
                            </div>
                            <button type="submit" class="btn btn-primary">بررسی</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>