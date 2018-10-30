<?php 
// To send HTML mail, the Content-type header must be set
$headers = [];
$headers['MIME-Version'] = '1.0';
$headers['Content-type'] = 'text/html; charset=iso-8859-1';

// Additional headers
$headers['From'] = 'Test <test@example.com>';

echo 'Mail sent: ';
var_dump(mail('kye@blah.com', 'TEST', 'TEST', $headers));

?>
<br>
<a href="http://localhost:8025">See the mail in the Mailhog UI</a>