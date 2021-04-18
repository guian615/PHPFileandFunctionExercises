<body>
    <div class="container text-center mt-5">
            <h1>Exercise 6: Function to check whether a number is prime or not</h1>
    </div>
    <div class="container text-center mt-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:50px;">
        <div class="row">
            <div class="col-sm">
                <img src="https://img.freepik.com/free-vector/calculator-concept-illustration_114360-1579.jpg?size=338&ext=jpg" alt="..." >
            </div>
            <div class="col-sm mt-5 mr-4">
                <h2>
                    Write a function to check whether a number is prime or not.
                </h2> 
            </div>
        </div>
    </div>
  


    <div class="container text-center mt-5 mb-5">
        <form method="post" action="">
        <input type="text" name="str" placeholder="Enter A Number" />
        <input type="submit" name="primeOrNot" class="btn btn-success text-white" value="Calulate"> 
        </form>   
        <?php
                include_once("header.php");
                if(isset($_POST['primeOrNot'])){
                $string = $_POST['str'];

                function primeOrNot($string){
                    for ($i = 2; $i <= $string-1; $i++) { 
                        if ($string % $i == 0) { 
                        $value= True; 
                        } 
                    } 
                    if (isset($value) && $value) { 
                        echo "<h1>The Number <span class='text-danger'>".$string." is not prime </span></h1>";
                    } else { 
                      echo "<h1>The Number <span class='text-success'>".$string." is prime </span></h1>";

                      }  
                    } 
                
            
            primeOrNot($string);
         }     
                            
        ?>
    </div>
</body>
