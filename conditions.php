<?php 

$age = $_POST['age'];

if($age > 18) {
    echo('Vous êtes majeur !!!');
} elseif($age < 18) {
    echo('Vous êtes mineur !!!');
} else {
    echo('Veuillez entrer votre age');
}

$action = ($_POST['good'] == 'oui' ? print('Cool keep going !!') : print('faites une pause ^^ '));


$nom = 'khouaji';
echo strlen($nom);
echo(' , '); 
$prenom = 'khouaji';
echo strlen($prenom);

if(strlen($nom) > strlen($prenom)) {
    echo('   votre nom est plus long que votre prenom');
} elseif(strlen($nom) < strlen($prenom)) {
    echo('   votre prenom est plus long que votre nom');
} elseif(strlen($nom) == strlen($prenom)) {
    echo('   votre nom et prenom son de longueur égale');
}

if(strlen($nom) === strlen($prenom)) {
    echo('   il est rare que vous ayez le meme prenom que votre nom');
}



$password = 'tufais@chier';

$pwd = htmlspecialchars($_POST['password']);
$login = htmlspecialchars($_POST['login']);

if($pwd === $password) {
    echo('    Password correct, access granted !');
} elseif($pwd !== $password) {
    echo('    Password incorrect, access denied !');
}

?>