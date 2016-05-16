<?php
{% if ansible_prolog -%}
{% from 'templates/ansible/prolog.j2' import prolog with context %}
{{ prolog() }}
{% endif -%}

define('USE_AUTHENTICATION', 0);

$files = array('/usr/share/doc/php5-apcu/apc.php', '/usr/share/doc/php-apc/apc.php');

foreach($files as $file) {
    if (file_exists($file)) {
        require_once $file;
        exit(0);
    }
}

die("Unable to find APC control file");
?>
