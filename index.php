<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real to Euro</title>
</head>
<body>
    <main>
        <h1>Real to Euro</h1>
        <br>
        <h2>Do you want to check how many caipirinhas you can buy in Brazil with your VDAB allowance? Calculate it here!</h2>
        <br>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="real-price">Price in Real</label>
            <input type="number" name="real-price" id="real-price">
            <button>Calculate</button>
        </form>
    </main>    
</body>
</html>