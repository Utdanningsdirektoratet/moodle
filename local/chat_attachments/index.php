<?php

require_once(__DIR__ . '/../../config.php');

defined('MOODLE_INTERNAL') || die();

require_login();

$PAGE->requires->js_call_amd('local_chat_attachments/example', 'init');

echo $OUTPUT->header();

echo $OUTPUT->footer();