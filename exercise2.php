<div class= "container mt-5 text-center">
        <?php
        include_once("header.php");
            function fileExisting($filename){
                if(file_exists($filename)){
                    $file = fopen($filename,'a');
                    fwrite($file,"\nThe Line is Added in text File :) (:.");
                    fclose($file);

                }
            }
            function fileReader($nameOfFile){
                if(file_exists($nameOfFile)){
                    $file = fopen($nameOfFile,'r');
                    $contents = fread($file, filesize($nameOfFile));    
                    echo "<h3><pre><span class='text-primary'>".$contents."</span></pre></h3>";
                    fclose($file);

            }
            }
            fileReader('text.txt');
            fileExisting('text.txt')

        ?>
</div>