<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Amai | FL -  Inquiry',
    'email_message' => 'New Inquiry For Freelance Gig',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'FL | ClovisAmai',
    'to' => 'clovisamaityan@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Full Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Full Name\' is required.'
    )
    ),
    'email-1' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'E-mail',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'E-mail\' is required.'
    )
    ),
    'phone' => array(
    'order' => 3,
    'type' => 'tel',
    'label' => 'Phone Number',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Phone Number\' is required.'
    )
    ),
    'inquiry' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Inquiry',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Inquiry\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>