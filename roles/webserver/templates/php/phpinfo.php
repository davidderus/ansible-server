<?php
{% if ansible_prolog -%}
{% from 'templates/ansible/prolog.j2' import prolog with context %}
{{ prolog() }}
{% endif -%}

phpinfo();
?>
