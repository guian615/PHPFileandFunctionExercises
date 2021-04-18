           
<div class="container mt-5 text-center">
    <?php
    include_once("header.php");
    function lineInFile($filename,$lineNumber){
        $lineWanted = $lineNumber-1;
        $line = $filename;
        $counterLine = 0; 
        $file = fopen('text.txt','r') or die($php_errormsg);
        while ((! feof($file)) && ($counterLine <= $lineWanted)) {
            if ($str = fgets($file,10122132)) {
                    $counterLine++; 
                } 
            } 
            fclose($file) or die($php_errormsg);
            echo "The text of the line $lineNumber of the text file is : ";

            echo "<br>";
            echo "<br>";
            print "<h3><span class='text-primary'>".$str."</span></h3>";    
    }
    lineInFile("text",3)
    ?>
</div>