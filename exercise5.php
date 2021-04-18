<body>
    <div class="container text-center mt-5">
            <h1>Exercise 5: Function to calculate the factorial of a number</h1>
    </div>
    <div class="container text-center mt-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:50px;">
        <div class="row">
            <div class="col-sm">
                <img src="https://img.freepik.com/free-vector/calculator-concept-illustration_114360-1239.jpg?size=338&ext=jpg" alt="..." >
            </div>
            <div class="col-sm mt-5">
                <h2>
                    Write a function to calculate the factorial of a number. 
                    The function accepts the number as an argument. If the argument given is a negative number, 
                    get its absolute value.
                </h2> 
            </div>
        </div>
    </div>
    <div class="container text-center mt-5 mb-5">
        <form method="post" action="">
        <input type="text" name="str" placeholder="Enter Number" />
        <input type="submit" name="factorial" class="btn btn-primary text-white" value="Factorial"> 
        </form>   
        <?php
                include_once("header.php");
                if(isset($_POST['factorial'])){
                $string = $_POST['str'];

                function factorial($number){
                    if($number<0){
                        $number = (abs($number));
                    }else{
                        $number = $number;
                    }
                    $factorial = 1; 
                    for ($i=$number; $i>=1; $i--)   {  
                        $factorial = $factorial * $i;  
                    }  
                    echo "<h1>Factorial of <span class='text-primary'>".$number."</span> is <span class='text-primary'>".$factorial."</span></h1>";
                
                }
            factorial($string);
         }     
                            
        ?>
    </div>
   
</body>
