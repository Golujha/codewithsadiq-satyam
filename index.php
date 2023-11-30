<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <form action="work.php" method="post">
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name">
        </div>

         <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email">
        </div>

         <div class="mb-3">
            <label for="contact">Contact</label>
            <input type="tel" id="contact" name="contact" placeholder="Enter your contact">
        </div>

         <div class="mb-3">
            <input type="submit" name="send" value="Create">
            <input type="reset" value="Clear">
        </div>
    </form>


    
</body>
</html>