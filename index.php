<?php 
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $price = filter_input(INPUT_POST, "price");
                $currency = filter_input(INPUT_POST, "currency");
                if (!empty($price)) {
                    if(!isset($_POST['currency-mode'])) {
                        $money = "Euro";
                        $result = match($currency) {
                            "Real" => $price * 0.19,
                            "Franc" => $price * 1.07,
                            "Pokécoins" => $price * 0.01,
                        };
                    };
                    if(isset($_POST['currency-mode'])) {
                        $money = $currency;
                        $result = match($currency) {
                            "Real" => $price * 5.38,
                            "Franc" => $price * 0.93,
                            "Pokécoins" => $price * 100,
                        };}}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Calculator</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <main>
        <h1>Currency Calculator</h1>
        <br>
        <h2>Do you want to check how many caipirinhas you can buy in Brazil with your VDAB allowance? Or spending your grandma's Christmas gift on Pokécoins? Or perhaps go to Switzerland to feel poor? Calculate it here!</h2>
        <br>
        <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="currency-mode">
                <p class="foreign">Foreign Currency</p>
                <label class="switch">
                    <input type="checkbox" id="toggle" name="currency-mode" value="1">
                    <span class="slider round"></span>
                </label>
                <p class="euro">Euro</p>
            </div>
            <legend>Select your currency:</legend>
            <input type="radio" id="real" name="currency" value="Real">
            <label for="real">Real</label><br>
            <input type="radio" id="franc" name="currency" value="Franc">
            <label for="franc">Swiss Franc</label><br>
            <input type="radio" id="pokecoins" name="currency" value="Pokécoins">
            <label for="pokecoins">Pokécoins</label>
            <br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price">
            <button>Calculate</button>
            <?php 
                if (empty($price)) {
                    echo "";
                } else {
                    echo "<p>Conversion price in " . $money .": " . $result . "</p>";
                } 
            ?>
        </form>
    </main>    
</body>
</html>