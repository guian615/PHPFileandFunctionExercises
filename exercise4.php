<body>
    <div class="container text-center mt-5">
            <h1>Exercise 4: Function to test the loyalty of a name</h1>
    </div>
    <div class="container text-center mt-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:50px;">
        <div class="row">
            <div class="col-sm">
                <img src="https://image.freepik.com/free-vector/customer-loyalty-concept-illustration_277904-1452.jpg" alt="..." >
            </div>
            <div class="col-sm mt-5 mr-4">
                <h2>
                    Create a function to test the loyalty of a name based on the number of letters in the name and the occurences of the letters E, A, or N in the string.
                </h2> 
                <h5>
                    a. If you have 3 or more occurrences for E, A, or N together, and the product of the occurrences and the length of 
                    the string is divisible by 6,
                    then display “Loyal”. Else, display “Di sure”.
                </h5>
	            testLoyalty(“VICTORIANO”) <- “Di sure”
                testLoyalty(“ELEASSARR”)<-  “Loyal”

                
            </div>
        </div>
    </div>  
    <div class="container text-center mt-5 mb-5">
        <form method="post" action="">
        <input type="text" name="str" placeholder="Enter A Name" />
        <input type="submit" name="test" class="btn btn-primary text-white" value="Test Name"> 
        </form>  
     
        <?php 
            include_once("header.php");
            if(isset($_POST['test'])){
                $string = $_POST['str'];
               
                    function testLoyalty($string){
                        $letterE = substr_count($string, "E");
                        $letterA = substr_count($string, "A");
                        $letterN = substr_count($string, "N");
                        $strlenght= strlen($string);
                        $totalVowel = $letterE + $letterA + $letterN;
                        $totalLenght = $totalVowel * $strlenght;

                        if($totalVowel >= 3){ 
                            if($totalLenght % 6==0){
                                echo "<h1 style='color:black;'>"."The Name " . "<h1 style='color:blue;'>". $string . "<h1 style='color:black;'>". " is " ."<h1 style='color:blue;'>". " Loyal"; 

                        }else{
                            echo "<h1 style='color:black;'>"."The Name " . "<h1 style='color:blue;'>". $string . "<h1 style='color:black;'>". " is " ."<h1 style='color:red;'>". " Di Sure"; 
                        }
                    }
                    else{
                        echo "<h1 style='color:black;'>"."The Name " . "<h1 style='color:red;'>". $string . "<h1 style='color:black;'>". " is " ."<h1 style='color:red;'>". " Di Sure"; 
                    }
                } 
                  testLoyalty($string);
            }           
        
         ?>
    </div>   
</body>