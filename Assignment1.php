<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ONLINE ORDERING PIZZA</title>
    <meta name="description" content="This is website for ordering pizza online">
    <meta name="robots" content="noindex, nofollow">
    <!--add Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&family=Oswald:wght@300&family=Roboto+Condensed:ital@1&display=swap"
        rel="stylesheet">
    <!-- add Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- add our custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<!-- body for webpage starts here-->
<body>
    <h2>just pizza </h2>
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="./img/pizza-logo.jpg" alt="Header Logo">
                </a>
                <div class="list">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Welcome</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="start">
            <div class="content">
                <a href="Assignment1.php">
                    <img src="./img/welcome.jfif" alt="welcome">
                </a>
                <div>
                    <h1> LOOKING FOR DELICIOUS PIZZAS !!</h1>
                    <h2>For Ordering online go ahead </h2>
                </div>
            </div>
        </section>
        <section class="formcontainer">
            <!--form Starts here-->
            <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          $fname= trim($_POST['fname']);
          $lname= trim($_POST['lname']);
          $address = trim($_POST['address']);
          $num = trim($_POST['num']);
          $email = trim($_POST['email']);
          $pizzaResults = "";
         $pizzaName = $_POST['pizza'];
         foreach ($pizzaName as $Value) {
           $pizzaResults .= $Value;
         }


          $error="";
          if(empty($fname)){
            $error = "Plz Enter your first name";
          }else if(empty($lname)){
            $error = "Plz Enter your Last name";
          }else if(empty($num)){
            $error = " Enter your Mobile Number";
          }else if(empty($email)){
            $error = "Enter YOur email !!";
          }
          else if(!is_numeric($num)){
            $error="Enter 0-9 only";
          }
          else if(strlen($num!=10)){
            $error = "Enter valid 10 digit phone number";
          }
          elseif (!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email)) {
          $error = "please use the correct format";
          }
        }
        ?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div>
                    <p><input type="text" name="fname" placeholder="First name"></p>
                    <p><input type="text" name="lname" placeholder="Last name"></p>
                    <p><input type="text" name="Address" placeholder="address"></p>
                    <p><input type="email" name="email" placeholder="Email"></p>
                    <p><input type="tel" name="num" placeholder="num"></p>
                    <h3>Ready to design your Pizza !!</h3>
                </div>
                <div class="bpizza">
                    <table>
                        <tr>
                            <th> </th>
                            <th> pizza </th>
                            <th> size </th>
                            <th> crust </th>
                            <th> price </th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><img src="./img/pizza2.jfif" width="150" height="150" alt="pizza"></td>
                            <td><input type="checkbox" value="maragreta">Margreta</td>
                            <td><input type="text" size=10 placeholder="size"></td>
                            <td><input type="text" size=20 placeholder="crust"></td>
                            <td><input type="number" value="14.15" readonly size=10></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><img src="./img/pizza4.jfif" width="150" height="150" alt="pizza2"></td>
                            <td><input type="checkbox" value="pepperoni">pepperoni</td>
                            <td><input type="text" size=10 placeholder="size"></td>
                            <td><input type="text" size=20 placeholder="crust"></td>
                            <td><input type="number" value="17.15" readonly size=10></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" value="macroni">Macroni and cheese</td>
                            <td><input type="text" size=10 placeholder="size"></td>
                            <td><input type="text" size=20 placeholder="crust"></td>
                            <td><input type="number" value="24.15" readonly size=10></td>
                            <td><img src="./img/pizza3.jfif" width="150" height="150" alt="pizza3"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" value="Doublecheese">doublecheese</td>
                            <td><input type="text" size=10 placeholder="size"></td>
                            <td><input type="text" size=20 placeholder="crust"></td>
                            <td><input type="number" value="20.15" readonly size=10></td>
                            <td><img src="./img/pizza5.jfif" width="150" height="150" alt="pizza"></td>
                        </tr>
                    </table>
                </div>
                <div class="toppings">
                    <table>
                        <tr>
                            <th></th>
                            <th>Add your toppings</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" value=" jalapeno " name="pizza[]"> jalapeno</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" value=" red onions " name="pizza[]"> red spicy onions</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" value=" extrapepproni " name="pizza[]"> extrapepproni</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" value=" mozzralla " name="pizza[]"> mozzralla cheese</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <input class="btn btn-primary order" type="submit" value="Submit">
                <input class="btn btn-dark reset" type="reset" value="Reset">
                <?php echo "<p class='error'>$error</p>";
       ?>
            </form>
            <!--form ends-->
        </section>
        <section class="results">
            <h3>Here is our results!!</h3>
            <p>Name:
                <?php echo "$fname $lname"; ?>
            </p>
            <p>Email:
                <?php echo "$email"; ?>
            </p>
            <p>Phone Number:
                <?php echo "$num"; ?>
            </p>
            <p>Toppings:
                <?php echo "$pizzaResults"; ?>
            </p>
        </section>
    </main>
    <footer>
        <h5>End of Page</h5>
    </footer>
</body>

</html>
