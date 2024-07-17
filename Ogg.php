<?php

require_once (__DIR__. 'MusicType.php');

class Ogg extends MusicType
{
    public function listen()
    {
        return 'Lecture du fichier Ogg '. $this->filename;
    }
}