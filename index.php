<html>
  <head>
    <title>PHP Google reCAPTHA V2 Example</title>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
  </head>
  <body>
  
    <div>
        <h1>PHP Google reCAPTCHA V2 Example</h1>
  
        <form action="process.php" method="post">
            <div>
                <label for="text">Email address:</label>
                <input type="text">
            </div>
  
            <div>
                <label>Comment:</label>
                <textarea></textarea>
            </div>
  
            <div>
                <div class="g-recaptcha" data-sitekey="REPLACE-WITH-SITE-KEY"></div>
            </div>
  
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
  
      </form>
        
    </div>
  
  </body>
</html>