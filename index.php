<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>AJAX FORM SUBMIT</title>
        <!--bootstrap 4 cdn link-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"
        <!--css link-->
        <link rel="stylesheet" href="style.css">
        <!--jquery cdn link-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--Popper JS-->
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-success text-center">Asynchronous JavaScript And XML</h1>
                    <form action="">
                        <div class="form-group">
                            <label class="label-control">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-control">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="label-control">Choose city</label>
                            <select name="city" id="city" class="form-control" onchange="myfun(this.value)">
                                <option>Select city</option>
                                <option>Rajshahi</option>
                                <option>Dhaka</option>
                                <option>Chattogram</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="label-control">Choose District</label>
                            <select name="district" id="district" class="form-control">
                                <option value="">Select district</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            function myfun(data)
            {
                alert(data);

                var req = new XMLHttpRequest();

                req.open('GET', 'http://localhost/aJAX/ajaxformsubmit/response.php?datavalue='+data, true);

                req.send();

                req.onreadystatechange = function ()
                {
                    if (req.readyState == 4 && req.status == 200)
                    {
                        document.getElementById('district').innerHTML = req.responseText;
                    }
                };
            }
        </script>
    </body>
</html>
