<body>
    <div class="container text-center mt-5">
            <h1>Exercise 7: Function to reverse a string</h1>
    </div>
    <div class="container text-center mt-5" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;border-radius:50px;">
        <div class="row">
            <div class="col-sm">
                <img src="https://img.freepik.com/free-vector/tiny-people-reading-writing-poetry-poem-isolated-flat-vector-illustration-cartoon-characters-standing-sitting-near-open-book-ink-feather-entertainment-literature-concept_74855-13258.jpg?size=626&ext=jpg&ga=GA1.2.1588707983.1618012800" alt="..." >
            </div>
            <div class="col-sm mt-5 mr-4">
                <h2>
                Write a function to reverse a string. If the string has an even number for its length, 
                grab only half of the reversed string. <br>
                reverseHalf(“Paolul”) -> “lul” <br>
                reverseHalf(“Billy”) -> “ylliB”
                </h2> 
            </div>
        </div>
    </div>
    <div class="container text-center mt-5 mb-5">
        <form method="post" action="">
        <input type="text" name="str" placeholder="Enter string" />
        <input type="submit" name="reverse" class="btn btn-primary text-white" value="Reverse"> 
        </form>  
        <?php
        include_once("header.php");
        if(isset($_POST['reverse'])){
            $string = $_POST['str'];

        function reverse($str){
            $len = strrev($str);
            $check = strlen($len);

            $test = $check/-2;

            if($check % 2 != 0){
               return $len;
            }else{
               $final = substr($len,0, $test);
               return $final;
            }
        }
        $str = $string;
        print_r("<h1 style='color:blue;'>".reverse($str));
    }
                
        ?>
    </div>   
</body>
