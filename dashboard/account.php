<?php

return [
    'email' => [
        'title' => 'Mettez votre e-mail à jour',
        'updated' => 'Votre e-mail a été mise à jour.',
    ],
    'password' => [
        'title' => 'Changer votre mot de passe',
        'requirements' => 'Votre nouveau mot de passe doit comporter au moins 8 caractères.',
        'updated' => 'Votre mot de passe a été mis à jour.',
    ],
    'two_factor' => [
        'button' => 'Configurer l\'authentification à 2 facteurs',
        'disabled' => 'L\'authentification à deux facteurs a été désactivée sur votre compte. Vous ne serez plus invité à fournir un Token lors de votre connexion.',
        'enabled' => 'L\'authentification à deux facteurs a été activée sur votre compte ! Désormais, lors de la connexion, vous devrez fournir le code généré par votre appareil.',
        'invalid' => 'Le Token fourni n\'était pas valide.',
        'setup' => [
            'title' => 'Mettre en place l\'authentification à deux facteurs',
            'help' => 'Vous ne pouvez pas scanner le code ? Saisissez le code ci-dessous dans votre application :',
            'field' => 'Entrez le Token',
        ],
        'disable' => [
            'title' => 'Désactiver l\'authentification à deux facteurs',
            'field' => 'Entrez le Token',
        ],
    ],
];
