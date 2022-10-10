<?php
    function read_file($file_path) {
        $read = [];
        $file = fopen($file_path, 'r');
        while(!feof($file)):
            $line = fgetcsv($file);
            if(!$line || is_null($line[0])|| str_starts_with($line[0], '###')) continue;
            $read[] = $line;
        endwhile;

        fclose($file);

        return $read;
    }

    function append_file($upload, $file_path) {
        $file = fopen($file_path, 'a');
        fputcsv($file, $upload);
        fclose($file);
    }