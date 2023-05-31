 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <div id="wrap">
		<div id='form_wrap'>
			<form action="submit.php" method="post" enctype="multipart/form-data">
				<p>Send Email</p>
				<label for="email">Email: </label>
				<input type="text" name="email" value="" id="emailphp" /><br><br>

				<label for="subject">Subject: </label>
				<input type="text" name="subject" value="" id="subjectphp" /><br><br>

				<label for="message">Your Message: </label>
				<textarea  name="message" value="Your Message" id="messagephp" ></textarea><br>	<br>		
				<input type="submit" name ="submit" value="Send!" />
			</form>
		</div>
	</div>
 </body>
 </html>