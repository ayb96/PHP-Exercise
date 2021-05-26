



<html>
    
    <head>
        <style>
            body{
                background: url("https://previews.123rf.com/images/zasabe/zasabe1902/zasabe190200105/119519606-keypad-tax-button-for-tax-calculation-easy-to-calculate-on-white-calculator-on-white-background-usin.jpg") no-repeat;
               
            }
            .container{
                
                margin-left:200px;
                margin-top:100px;
            }
            button{
                margin-top: 10px;
                margin-left: 70px;
            }
            th{
                border: 2px solid white;
                border-collapse: collapse;
                    
                }
            label{
                font-size: 20px;
                margin-bottom: 10px;
            }
            table{
                color: black;
                font-size: 20px;
                       
            }     
            .radio-box{
                display: flex;
            }
        </style>
    </head>


    <body>
        
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="container">
                <div>
                <span style="color: red;"><?php echo $salEr;?></span>
                    <label style="color: white; ">Salary in USD <br></label>
                    
                    <input type="text" name="salary" id="name" required> 
                </div>
                <div class="radio-box">
   
                    <div>
                
                        <input type="radio" name="mory" id="same" >
                        <label for="month" style="color: white;">Monthly</label>
                    </div>
                    <div>
                
                        <input type="radio" name="mory" id="same" checked>
                        <label for="year" style="color: white;">Yearly</label>
                    </div>
                </div>
 
                <div>
                    <label style="color: white;">Tax Free Allowance in USD<br></label>
                    <input type="text" name="tax" id="name" required> 
                </div>
                <button type="submit">Submit</button>
            </div>
        </form>
        <?php
             
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $salaryusd = $_POST["salary"];
                $ftax = $_POST["tax"];
                
            }
            $b = 10000;
            $c = 25000;
            $d = 50000;
            
            
        ?>

         <table style="width:50%;">
         <tr>
        <th><><></th>
        <th>Monthly</th>
        <th>Yearly</th>
        </tr>


        <tr>
        <th>Total salary</th>
        <th><?php $tsm = $salaryusd / 12;
                  echo $tsm;
        ?></th>
        <th><?php $tsy = $salaryusd;
        echo $tsy;?></th>
        
        </tr>


        <tr>
        <th>Tax amount</th>
        <th>
        <?php 
        if ($salaryusd > $b && $salaryusd < $c){
            $tam = ($salaryusd * 0.11)/12;
             echo $tam;
        }else if ($salaryusd > $c && $salaryusd < $d){
            $tam = ($salaryusd * 0.3)/12;
             echo $tam;
       }else if ($salaryusd > $d){
        $tam = ($salaryusd * 0.45)/12;
             echo $tam;
   }
       ?>


        </th>


        <th><?php 
        if ($salaryusd > $b && $salaryusd < $c){
            $tay = $salaryusd * 0.11;
             echo $tay;
        }else if ($salaryusd > $c && $salaryusd < $d){
            $tay = $salaryusd * 0.3;
            echo $tay;
       }else if ($salaryusd > $d){
            $tay = $salaryusd * 0.45;
            echo $tay;
   }
       ?></th>
        </tr>



        <tr>
        <th>Social security fee</th>
        <th><?php if ($salaryusd < $b){
            $ssfm = 0;
        }else{
            $ssfm = ($salaryusd * 0.04) / 12 ;
             echo $ssfm;
        }
?></th>
        <th><?php if ($salaryusd < $b){
            $ssfy = 0;
             echo $ssfy;
        }else{
            $ssfy = $salaryusd * 0.04;
            echo $ssfy;
        }
        ?></th>
        
        </tr>

       
            
        



        <tr>
        <th>Salary after tax</th>
        <th><?php  $satm = $tsm - $tam - $ssfm;
                    echo $satm + $ftax;
        ?></th>
        <th>
        <?php  $saty = $tsy - $tay - $ssfy;
                    echo $saty + $ftax;
        ?>
        </th>
        </tr>
        <table>
        
        
        

       
        


    </body>

</html>

