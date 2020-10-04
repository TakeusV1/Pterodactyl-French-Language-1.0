<?php

return [
    'sign_in' => 'Se connecter',
    'go_to_login' => 'Go to Login',
    'failed' => 'Aucun compte correspondant à ces identifiants n\'a pu être trouvé.',

    'forgot_password' => [
        'label' => 'Mot de passe oublié?',
        'label_help' => 'Entrez l\'adresse e-mail de votre compte pour recevoir des instructions sur la réinitialisation de votre mot de passe.',
        'button' => 'Récupérer le compte',
    ],

    'reset_password' => [
        'button' => 'Réinitialiser et se Connecter',
    ],

    'two_factor' => [
        'label' => 'Jeton 2-Factor',
        'label_help' => 'Ce compte nécessite une deuxième couche d\'authentification pour pouvoir continuer. Veuillez entrer le code généré par votre appareil pour compléter cette connexion.',
        'checkpoint_failed' => 'Le jeton 2FA fourni était invalide.',
    ],

    'throttle' => 'Trop de tentatives de connexion. Veuillez réessayer dans :seconds secondes.',
    'password_requirements' => 'Le mot de passe doit comporter au moins 8 caractères et doit être unique à ce site.',
    '2fa_must_be_enabled' => 'L\'administrateur a exigé que l\'authentification à 2 facteurs soit activée pour votre compte afin d\'utiliser le Panel.',
];
