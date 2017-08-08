<?php

if ($handle = opendir('C:\wamp64\www\example')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            echo "$entry\n";
        }
		$file = 'test2.txt';
		// içeriği dosyanın sonuna eklemek için FILE_APPEND kullanılır.
    // ve başkasının dosyaya aynı anda yazmasını önlemek için LOCK_EX kullanılır.
        file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

    }

	

}


?>
