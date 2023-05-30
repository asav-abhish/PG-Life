<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>

        <style>
          body{
            padding: 0;
            margin:0;
          }
           
           .box {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  font-weight: 200;
  bottom: 200px;
  right: 1000px;
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  padding-left: 30px;
  padding-right: 20px;
}
h4{
    text-align: center;
    font-size: 30px;
}

.contact_us {
	max-width: 1170px;
	margin-left: auto;
	margin-right: auto;
	padding: 1em;
}

ul {
	list-style: none;
	padding: 0;
}

.brand {
	text-align: center;
	font-weight: 300;
	text-transform: uppercase;
	letter-spacing: 0.1em;
}

.brand span {
	color: #ffffff;
}

.wrapper {
	box-shadow: 0 0 20px 0 rgba(6, 244, 248, 0.7);
}

.wrapper > * {
	padding: 1em;
}

/* ------------------- */
/* COMPANY INFORMATION */
/* ------------------- */

.company-info {
	background:rgba(6, 244, 248, 0.7);
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
}

.company-info h3,
.company-info ul {
	text-align: center;
	margin: 0 0 1rem 0;
}

/* ------- */
/* CONTACT */
/* ------- */

.contact {
	background:rgba(143, 236, 238, 0.7);
	border-bottom-left-radius: 4px;
	border-bottom-right-radius: 4px;
}

/* ---- */
/* FORM */
/* ---- */

.contact form {
	display: grid;
	grid-template-columns: 1fr 1fr;
	grid-gap: 20px;
}

.contact form label {
	display: block;
}

.contact form p {
	margin: 0;
}

.contact form .full {
	grid-column: 1 / 3;
}

.contact form button,
.contact form input,
.contact form textarea {
	width: 100%;
	padding: 1em;
	border: solid 1px #627edc;
	border-radius: 4px;
}

.contact form textarea {
	resize: none;
}

.contact form button {
	background: #04536b;
	border: 0;
	color: #e4e4e4;
	text-transform: uppercase;
	font-size: 14px;
	font-weight: bold;
}

.contact form button:hover,
.contact form button:focus {
	background: #116c9d;
	color: #ffffff;
	outline: 0;
	transition: background-color 2s ease-out;
}

/* ------------- */
/* MEDIA QUERIES */
/* ------------- */

@media only screen and (min-width: 700px) {
	.wrapper {
		display: grid;
		grid-template-columns: 1fr 2fr;
	}

	.wrapper > * {
		padding: 2em;
	}

	.company-info {
		border-radius: 4px 0 0 4px;
	}

	.contact {
		border-radius: 0 4px 4px 0;
	}

	.company-info h3,
	.company-info ul,
	.brand {
		text-align: left;
	}
}

        </style>
   <body>
        <?php
             include("header.php");
     ?>
    
    <div class="box">
        <img src="img/bg3.png" alt="Nature" style="width:100%;">
        <div class="text-block">
            <h4 >Contact Us</h4>
            <p>If you have any comment regarding stay one of our website and its functionality, our loyalty scheme, development or franchises,
                whether you are a user or owner of the PGs, please contact us.
            </p>
        </div>
    </div>

    <div class="contact_us">
    
    
      <div class="wrapper">
    
        <!-- COMPANY INFORMATION -->
        <div class="company-info">
          <h3>PG Life</h3>
    
          <ul>
            <li><i class="fa fa-road"></i> Dumka</li>
            <li><i class="fa fa-phone"></i> +91 9902365478</li>
            <li><i class="fa fa-envelope"></i> pglife123@gmail.com</li>
          </ul>
        </div>
        <!-- End .company-info -->
    
        <!-- CONTACT FORM -->
        <div class="contact">
          <h3>E-mail Us</h3>
    
          <form method="post" id="contact-form">
    
            <p>
              <label>Name</label>
              <input type="text" name="name" id="name" required>
            </p>
    
            <p>
              <label>Place</label>
              <input type="text" name="place" id="place">
            </p>
    
            <p>
              <label>E-mail Address</label>
              <input type="email" name="email" id="email" required>
            </p>
    
            <p>
              <label>Phone Number</label>
              <input type="text" name="phone" id="phone">
            </p>
    
            <p class="full">
              <label>Message</label>
              <textarea name="message" rows="5" id="message"></textarea>
            </p>
    
            <p class="full">
              <button type="submit" id="submit">Submit</button>
            </p>
    
          </form>
         </div>
       
    
      </div>
      
    </div>
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
    
    <script>
      var submit = document.getElementById('submit') ;
      submit.addEventListener('click',function(e){
      e.preventDefault()
      var name = document.getElementById('name').value;
       var place = document.getElementById('place').value;
        var email = document.getElementById('email').value;
         var phone = document.getElementById('phone').value;
          var message = document.getElementById('message').value;
          var body = 'name: ' +name+ 'place: ' +place+ '<br/> email: ' +email+ 'phone: ' +phone+ 'message: ' +message;
      Email.send({
          Host: "smtp.email.com",
          Username: "nitadeepa11@gmail.com",
          Password: "3A8C7219AB3FEA006A04212A366018500109",
          To: 'nitadeepa11@gmail.com',
          From: email,
          Subject: contact_form,

                    Body: body
        }).then(
          message => alert(message)
        );
      })
    </script>

        <?php
             include("footer.php");
     ?>
</body>
</html>