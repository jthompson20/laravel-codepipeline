<?php
require_once 'vendor/autoload.php';

trait message {
  public function msg() {
    echo "OOP is fun! ";
  }
}

class Welcome {
  use message;
}

$obj = new Welcome();
$obj->msg();

echo '<BR><BR>';

use Symfony\Component\Translation\Loader\ArrayLoader;
use Symfony\Component\Translation\Translator;

$translator = new Translator('fr_FR');
$translator->addLoader('array', new ArrayLoader());
$translator->addResource('array', [
    'Symfony is great!' => 'Symfony est super !',
], 'fr_FR');

var_dump($translator->trans('Symfony is great!'));
