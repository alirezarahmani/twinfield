<?php

require_once 'classes/Pronamic/Pronamic.php';

// Statics
Pronamic\Pronamic::$libraryDir = __DIR__;

// Autoload
spl_autoload_register('Pronamic\Pronamic::autoload');
