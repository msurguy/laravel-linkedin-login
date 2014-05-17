<?php

// Social apps keys 
return array(
    'linkedin' => array(
        'clientId'  =>  'your_app_client_id',
        'clientSecret'  =>  'your_app_client_secret',
        'redirectUri'   =>  url('login/linkedin'),
        'scope' => 'r_basicprofile r_emailaddress r_contactinfo r_fullprofile',
    ),
);
