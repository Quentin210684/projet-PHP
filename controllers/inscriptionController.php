<?php 
$formErrors = [];
$regex = [
    'name' => '/^([A-Za-zâäàéèùêëîïôöçñ]+){1}([- ]{1}[A-Za-zâäàéèùêëîïôöçñ]+){0,1}?$/',
    'mail' => '#^([a-z0-9-_.]+){1}(@){1}([a-z-.]+){1}(.){1}([a-z]{2,6}){1}$#',
];

if(count($_POST) > 0){
    if(!empty($_POST['name'])){
        if(preg_match($regex['name'], $_POST['name'])){
            $name = strip_tags($_POST['name']);
        } else {
            $formErrors['name'] = 'Le nom est invalide. Il ne peut comporter que des lettres, des tirets ou un espace';
        }
    } else {
        $formErrors['name'] = 'Le nom de l\'utilisateur est obligatoire.';
    }
    
    if(!empty($_POST['email'])){
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $mail = strip_tags($_POST['email']);
        } else {
            $formErrors['email'] = 'l\'adresse mail est invalide.';
        }
    } else {
        $formErrors['email'] = 'L\'adresse mail est obligatoire.';
    }

    if(!empty($_POST['subject'])){
        if(preg_match($regex['name'], $_POST['name'])){
            $subject = strip_tags($_POST['subject']);
        } else {
            $formErrors['name'] = 'Le sujet est invalide. Il ne peut comporter que des lettres, des tirets ou un espace';
        }
    } else {
        $formErrors['name'] = 'Le sujet est obligatoire.';
    }
}
?>