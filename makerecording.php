<?php
    header("content-type: text/xml");
    echo('<?xml version="1.0" encoding="UTF-8"?>');
?>

<Response>
    <Play>http://davidleonard.me/talk2/recordingtest.wav</Play>
    <Record transcribe="true" transcribeCallback="transcribed.php" action="goodbye.php" maxLength="60" />
</Response>
