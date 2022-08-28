<?php

namespace App\libraries;

class Slider {
    private $path;
    private $files;

    public function __construct()
    {
        $this->files = array();
    }

    public function setPath($path) {
        $this->path = $path;
    }

    public function getFiles() {
        foreach(glob($this->path) as $file) {
            if(!is_dir($file)) {
                array_push($this->files, $file);
            }
        }
        return $this->files;
    }
}