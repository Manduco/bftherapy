<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    function sendEmail($to, $subject, $data) {
        // Additional headers
        $headers = "From: contact@bftherapy.org\r\n";
        //$headers .= "Cc: admin@bftherapy.org\r\n";
        $headers .= "Reply-To: contact@bftherapy.org\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n"; // Use HTML format
    
        // Email server settings
        $smtpServer = "mail.bftherapy.org";
        $smtpPort = 465; // Use 465 for SSL
    
        // Username and password
        $username = "contact@bftherapy.org";
        $password = "Baseball1499))"; // Replace with your actual email account password
    
        // Create a stream context to set SSL options
        $context = stream_context_create([
            "ssl" => [
                "verify_peer" => false,
                "verify_peer_name" => false,
            ],
        ]);
    
        // Set the SMTP options
        ini_set("SMTP", $smtpServer);
        ini_set("smtp_port", $smtpPort);
        ini_set("sendmail_from", $username);
    
        // Create the HTML table for the data
        $table = '<table border="1">
                    <tr>
                        <td>Parent/Guardian First Name:</td>
                        <td>' . $data['ParentFirstName'] . '</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>' . $data['Email'] . '</td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td>' . $data['PhoneNumber'] . '</td>
                    </tr>
                    <tr>
                        <td>Child\'s First Name:</td>
                        <td>' . $data['ChildFirstName'] . '</td>
                    </tr>
                    <tr>
                        <td>Child\'s Last Name:</td>
                        <td>' . $data['ChildLastName'] . '</td>
                    </tr>
                    <tr>
                        <td>Age:</td>
                        <td>' . $data['Age'] . '</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>' . $data['Location'] . '</td>
                    </tr>
                    <tr>
                        <td>Insurance:</td>
                        <td>' . $data['Insurance'] . '</td>
                    </tr>
                    <tr>
                        <td>Member ID:</td>
                        <td>' . $data['MemberID'] . '</td>
                    </tr>
                    <tr>
                        <td>Preferred Method of Contact:</td>
                        <td>' . $data['PreferredContactMethod'] . '</td>
                    </tr>
                    <tr>
                        <td>Preferred Language:</td>
                        <td>' . $data['PreferredLanguage'] . '</td>
                    </tr>
                    <tr>
                        <td>Additional information:</td>
                        <td>' . $data['AdditionalInfo'] . '</td>
                    </tr>
                </table>';
    
        // Compose the email message
        $today = date("F j, Y, g:i a");  
        $emailMessage = '<html><body>';
        $emailMessage .= '<h2>' . $subject . '</h2>';
        $emailMessage .= '<p> Submited on: '. $today . '</p>';
        $emailMessage .= $table;
        $emailMessage .= '</body></html>';
    
        // Send the email
        if (mail($to, $subject, $emailMessage, $headers, "-f" . $username)) {
            return true;
        } else {
            return false;
        }
    }

    
    $ParentFirstName= $_POST["parentFirstName"];
    $Email= $_POST["email"];
    $PhoneNumber = $_POST["phone"];
    $ChildFirstName= $_POST["childFirstName"];
    $ChildLastName =  $_POST["childLastName"];
    $Age= $_POST["age"];
    $Location= $_POST["location"];
    $Insurance= $_POST["insurance"];
    $MemberID = $_POST["memberID"];
    $PreferredContactMethod = $_POST["contactMethod"];
    $PreferredLanguage =$_POST["preferredLanguage"];
    $AdditionalInfo = $_POST["additionalInfo"];
    $recipient = "armando.zincke@gmail.com";
    $emailSubject = "New Client Information";
    $clientData = array(
        'ParentFirstName' => $ParentFirstName,
        'Email' =>   $Email,
        'PhoneNumber' => $PhoneNumber,
        'ChildFirstName' => $ChildFirstName,
        'ChildLastName' => $ChildLastName,
        'Age' =>  $Age,
        'Location' =>   $Location,
        'Insurance' =>   $Insurance,
        'MemberID' =>     $MemberID,
        'PreferredContactMethod' =>    $PreferredContactMethod,
        'PreferredLanguage' =>    $PreferredLanguage,
        'AdditionalInfo' =>     $AdditionalInfo ,
    );
      

    try {
        if (sendEmail($recipient, $emailSubject, $clientData)) {
            echo "Email sent successfully";
    
        } else {
            echo "Email could not be sent";
        }
    } catch (\Throwable $th) {
        echo "An error occurred";
    }

    

}
?>