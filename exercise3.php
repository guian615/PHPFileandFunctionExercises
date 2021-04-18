<body>
<div class="container mt-5 text-center text-primary">
    <?php
    include_once("header.php");
        function randomLiner($nameOfFile){

        if(file_exists($nameOfFile)){
            $newFile = strtolower($nameOfFile);
            $lengthOfVowel =  substr_count($newFile, 'a')
                            + substr_count($newFile, 'e')
                            + substr_count($newFile, 'i')
                            + substr_count($newFile, 'o')
                            + substr_count($newFile, 'u');
            
            $file = fopen($nameOfFile,'r');
            $line2 = 2;
            $line3 = 3;
            
            if($lengthOfVowel % 2 == 0){
                $counter = 0;
                echo "The number of vowels are $counter<br><br>";
                while(!feof($file)){
                    $counter++;
                    $lines = fgets($file);
                    if($counter == $line2){
                        return "3. ".$lines."<br>";
                    }
                }
            }
            else
            {
                $counter = 0;
                while(!feof($file)){
                    $counter++;
                    $lines = fgets($file);
                    if($counter == $line3){
                        return $lines;
                    }
                }
            }
        } 
        else
        {
            return sprintf("file %s didn't exist !",$nameOfFile);
        }
        }
        echo "<h2>".randomLiner("text.txt")."</h2>";

    ?>
</div>
</body>