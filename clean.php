<?php

$filename = $_GET["s"];
$content_pattern = $_GET["c"];
echo "Searching for $content_pattern in ".$filename."</br>";

//define the path as relative
$path = ".";
$webpath ="Type your domain name here. Eg:http://www.diovo.com/";

//using the opendir function
$dir_handle = @opendir($path) or die("Unable to open $path");

echo "Directory Listing of $path<br/>";

list_dir($dir_handle,$path,$filename,$content_pattern);

function list_dir($dir_handle,$path,$filename_pattern,$content_pattern)
{
    // print_r ($dir_handle);
    echo "<ol>";
    //running the while loop
    while (false !== ($file = readdir($dir_handle))) {
        $dir =$path.'/'.$file;
        if(is_dir($dir) && $file != '.' && $file !='..' )
        {
            $handle = @opendir($dir) or die("undable to open file $file");
            list_dir($handle, $dir, $filename_pattern, $content_pattern);
        }elseif($file != '.' && $file !='..')
        {
			//if(strcmp("$file", "$filename_pattern")==0){
				echo "<li><a href='$webpath.$dir'>$webpath.$dir</a></li>";
				
				$handle = @fopen($dir, "r"); 
				if ($handle) { 
				   while (!feof($handle)) {
						$content = fgets($handle); 
						$test = stristr($content, $content_pattern);
						echo $test;

				   } 
				   fclose($handle); 
				} 
			//}
        }
    }
    
    echo "</ol>";

    closedir($dir_handle); 
}
?>