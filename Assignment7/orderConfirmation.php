<!DOCTYPE html>
<html>
<head>
    <meta name="keywords" content="assignment 3, pizza, pepperoni, slices, pie, javascript, js, order confirmation">
    <meta name="description" content="A web page about pizza, made for assignment #5 of CS268">
    <title>Pizza | Order Confirmation</title>
    <link rel="stylesheet" type="text/css" href="pizza.css">
    <script src="http://use.edgefonts.net/cabin-sketch.js"></script>
    <script src="http://use.edgefonts.net/passion-one.js"></script>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <script src="pizza.js"></script>
</head>

<body>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] != "POST") {
            header("Location: http://yoda.cs.uwec.edu/CS268/students/quaranpn4020/Assignment7/order.html");    
        }
    ?>
    
    <div id="container">
        
        <div id="orderContainer">
            <div id="menuBar">
            
            </div>
            
            <div id="orderForm">
                <h1>
                    create your own 'za
                </h1>
                <table class="formTable">
                    <tr>
                        <td class="formLabel">
                            Size:
                        </td>
                        <td>
                            <?php
                                $sizeVal = $_POST["size"];
                                if ($sizeVal == "s") {
                                    echo "Small";
                                }
                                if ($sizeVal == "m") {
                                    echo "Medium";
                                }
                                if ($sizeVal == "l") {
                                    echo "Large";
                                }
                                if ($sizeVal == "r") {
                                    echo "Ryan Sized";
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="formLabel">
                            Toppings:
                        </td>
                        <td>
                            <!--NumChecked is used to generate a linebreak between toppings-->
                            <?php
                                $numChecked = 0;
                                if ($_POST["pepperoni"] == "pep") {
                                    echo "Pepperoni";
                                    $numChecked++;
                                }
                                if ($_POST["sausage"] == "sau") {
                                    if ($numChecked > 0) {
                                        echo "<br>";
                                    }
                                    echo "Sausage";
                                    $numChecked++;
                                }
                                if ($_POST["onion"] == "oni") {
                                    if ($numChecked > 0) {
                                        echo "<br>";
                                    }
                                    echo "Onion";
                                    $numChecked++;
                                }
                                if ($_POST["jalapeno"] == "jal") {
                                    if ($numChecked > 0) {
                                        echo "<br>";
                                    }
                                    echo "Jalapeno";
                                    $numChecked++;
                                }
                                if ($_POST["greenpepper"] == "grp") {
                                    if ($numChecked > 0) {
                                        echo "<br>";
                                    }
                                    echo "Green Pepper";
                                    $numChecked++;
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="formLabel">
                            Comments:
                        </td>
                        <td>
                            <?php 
                                echo $_POST["comments"]; 
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <!--Removed submit and reset from two td's here-->
                    </tr>
                </table>
                
            </div>
            
        </div>
    
        <div id="footer">Site by pizza. &copy;2017.</div> 
        
    </div>
    
</body>
</html>