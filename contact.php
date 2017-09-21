<?php
	 class Contact 
	 {
	 		public $name;
	 		public $phone;
	 		public $address;
            public $image_path;

	 }

	 $hendrix = new Contact();
	 $hendrix->name =  "Jimi Hendrix";
	 $hendrix->phone =  "503-826-9371";
	 $hendrix->address =  "208 SW 5th st. Portland, OR 97204";
     $hendrix->image_path = "img/hen.jpg";


	 $elvis = new Contact();
	 $elvis->name =  "Elvis Presley";
	 $elvis->phone =  "617-356-3571";
	 $elvis->address =  "Graceland";
     $elvis->image_path = "img/kamau.jpg";


	 $einstein = new Contact();
	 $einstein->name =  "Albert Einstein";
	 $einstein->phone =  "415-738-4935";
	 $einstein->address =  "3718 MLK blvd. Oakland, CA 94609";
     $einstein->image_path = "img/e.jpg";

	 // an array to display individual contact

	 $address_book   = array($hendrix, $elvis,  $einstein );
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<title>Address Book</title>
</head>
<body>
	<div class="container">
		<h1>Address book</h1>
			<ul>
			   <?php 
                foreach ($address_book as $contact) {
                    echo "<li>";
                    echo $contact->name;
                    echo "<ul>";
                    // this line will help us print images of our contact on the browser
                    echo "<li><img src='$contact->image_path'></li>";
                    echo "<li> $contact->phone </li>";
                    echo "<li> $contact->address </li>";
                    echo "</ul>";
                    echo "</li>";
                }
            ?>
			</ul>
	</div>

</body>
</html>