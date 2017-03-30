<!DOCTYPE html>
<html>
<head>
    <meta name="keywords" content="assignment 3, pizza, pepperoni, slices, pie, javascript, js">
    <meta name="description" content="A web page about pizza, made for assignment #5 of CS268">
    <title>Pizza | Order</title>
    <link rel="stylesheet" type="text/css" href="pizza.css">
    <script src="http://use.edgefonts.net/cabin-sketch.js"></script>
    <script src="http://use.edgefonts.net/passion-one.js"></script>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <script src="pizza.js"></script>
</head>

<body>
    
    <div id="container">
        
        <div id="orderContainer">
            <div id="menuBar">
            
            </div>
            
            <div id="orderForm">
                <h1>
                    create your own 'za
                </h1>
                
                <form name="pizzaOrderForm" onsubmit="return validateForm();" method="post" action="http://yoda.cs.uwec.edu/CS268/students/HARDTR/processForm.php">
                    <table class="formTable">
                        <tr>
                            <td class="formLabel">
                                Size:
                            </td>
                            <td>
                                <select name="size">
                                    <option value="">Choose a size</option>
                                    <option value="s">Small</option>
                                    <option value="m">Medium</option>
                                    <option value="l">Large</option>
                                    <option value="r">Ryan Sized</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="formLabel">
                                Toppings:
                            </td>
                            <td>
                                <input type="checkbox" name="pepperoni" value="pep">Pepperoni<br>
                                <input type="checkbox" name="sausage" value="sau">Sausage<br>
                                <input type="checkbox" name="onion" value="oni">Onion<br>
                                <input type="checkbox" name="jalapeno" value="jal">Jalapeno<br>
                                <input type="checkbox" name="greenpepper" value="grp">Green Pepper<br>
                            </td>
                        </tr>
                        <tr>
                            <td class="formLabel">
                                Comments:
                            </td>
                            <td>
                                <textarea name="comments" rows="3" cols="40"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name ="submit" value="Place Order">
                            </td>
                            <td>
                                <input type="reset" value="Reset">
                            </td>
                        </tr>
                    </table>
                
                </form>
                
            </div>
            
        </div>
    
        <div id="footer">Site by pizza. &copy;2017.</div> 
        
    </div>
    
</body>
</html>