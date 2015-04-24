<?php

return [
    'name'        => [
        'name'         => 'Name',
        'placeholder'  => 'Hello World!',
        'instructions' => 'What is the name of this email template?'
    ],
    'description' => [
        'name'         => 'Description',
        'placeholder'  => 'The site\'s welcome email.',
        'instructions' => 'Briefly describe what this email template is for.'
    ],
    'subject'     => [
        'name'         => 'Subject',
        'placeholder'  => 'Hello World!',
        'instructions' => 'Enter the email\'s subject line.'
    ],
    'body'        => [
        'name'         => 'Body',
        'instructions' => 'Compose the body of the email template below. Plugins are supported.'
    ],
    'to'          => [
        'name'         => 'To',
        'label'        => 'Send to',
        'instructions' => 'What email should email template be sent to? The contact email will be used by default.'
    ],
    'from'        => [
        'name'         => 'From',
        'label'        => 'Send from',
        'instructions' => 'What email should email template be sent from? The user / sender / server email will be used by default depending on the context.'
    ]
];
