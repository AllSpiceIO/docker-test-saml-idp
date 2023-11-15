<?php

$metadata['test-sp'] = [
    'host' => '__DEFAULT__',
    'privatekey' => 'server.pem',
    'certificate' => 'server.crt',
    'auth' => 'example-userpass',
    'attributes.NameFormat' => 'urn:oasis:names:tc:SAML:2.0:attrname-format:uri',
    'authproc' => [
        // Convert LDAP names to oids.
        100 => ['class' => 'core:AttributeMap', 'name2oid'],
    ],
];
