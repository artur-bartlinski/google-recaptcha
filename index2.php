<!DOCTYPE html>

<!-- 

This is version of recaptcha script using the official package


-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <style>
            .g-recaptcha {
                margin-bottom: 10px;
                margin-top: 10px;
            }     
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Sign Up</h3>
                    <hr>
                    <form action="signup2.php" method="post" autocomplete="off">
                        <div class="form-group">
                            <label for="email">E-mail Address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="you@domain.com"
                        </div>
                        
                        <div class="g-recaptcha" data-sitekey="6LcrMRMUAAAAADunZig4rAMl5CqzXMFUv2tnq75I"></div>
                        
                        <input type="submit" value="Sign Up" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </body>
</html>
