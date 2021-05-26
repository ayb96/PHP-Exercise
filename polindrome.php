    <html>
    <head>
    <title>Polindrome</title>
    </head>
    <body>

    <form method="post">        
    <p>Enter a Number: <input type="text" name="pol"/><br></p>  
    <button type="submit" >Check</button>  
    </form>  
    <?php   
        if($_POST)  
        {  
            $str = $_POST['pol'];  
            $reverse = strrev($str);  
            if($str == ""){
                echo "please enter a string";
            }
            else if($str == $reverse){  
                echo "The string $str is Palindrome";     
            }else{  
                echo "The string $str is not a Palindrome";   
            }  
    }     
          ?>  

    </body>
    </html>
