<?php
    
    if (!isset($_REQUEST['RecordingUrl'])) {
        echo "Must specify recording url";
        die;
    }
    
    if (!isset($_REQUEST['TranscriptionStatus'])) {
        echo "Must specify transcription status";
        die;
    }
    
    if (strtolower($_REQUEST['TranscriptionStatus']) != "completed") {
        $subject = "Error transcribing message from ${_REQUEST['Caller']}";
        $body = "New message from ${_REQUEST['Caller']}\n\n";
        $body .= "Click this link to listen to the message:\n";
        $body .= $_REQUEST['RecordingUrl'];
    } else {
        $subject = "New message from ${_REQUEST['Caller']}";
        $body = "New message from ${_REQUEST['Caller']}\n\n";
        $body .= "Text of the Twilio transcribed message:\n";
        $body .= $_REQUEST['TranscriptionText']."\n\n";
        $body .= "Click this link to listen to the message:\n";
        $body .= $_REQUEST['RecordingUrl'];
    }
    
    $headers = 'From: message@techzans.com' . "\r\n" .
        'Reply-To: message@techzans.com' . "\r\n" .
        'X-Mailer: Techzans';
    // mail($_REQUEST['email'], $subject, $body, $headers);
    mail('dleonard@codeforamerica.org', $subject, $body, $headers);
    mail('maya@codeforamerica.org', $subject, $body, $headers);
    mail('amymok@codeforamerica.org', $subject, $body, $headers);

?>