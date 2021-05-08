<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/style/style.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        * {
	padding:0;
	margin:0;
}
body {
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	background:#f2f2f2;
}
.bg_img {
	background:url(https://static.pexels.com/photos/168066/pexels-photo-168066.jpeg) no-repeat center;
	background-size:cover;
	background-attachment:fixed;
	-webkit-filter: blur(8px);
	-moz-filter: blur(8px);
	-o-filter: blur(8px);
	-ms-filter: blur(8px);
	filter: blur(8px);
	position:absolute;
	top:0;
	left:0;
	height:100%;
	width:100%;
	z-index:0;
}
.clearfix:after {
	content: "";
	display: block;
	clear: both;
	visibility: hidden;
	height: 0;
}
.form_wrapper {
	background:#fff;
	width:500px;
	max-width:100%;
	box-sizing:border-box;
	padding:15px;
	margin:10% auto 0;
	position:relative;
	z-index:1;
	-webkit-box-shadow:0 23px 4px -21px rgba(0, 0, 0, 0.9);
	-moz-box-shadow:0 23px 4px -21px rgba(0, 0, 0, 0.9);
	box-shadow:0 23px 4px -21px rgba(0, 0, 0, 0.9);
}
.form_container {
	padding:15px;
	border:1px dashed #ccc;
}
.form_wrapper h2 {
	font-size:1.5em;
	line-height:1.5em;
	margin:0;
}
.form_wrapper .title_container {
	text-align:center;
	margin:-15px -15px 15px;
	padding:15px 0;
	border-bottom:1px dashed #ccc;
}
.form_wrapper h3 {
	font-size:1.1em;
	font-weight:normal;
	line-height:1.5em;
	margin:0;
}
.form_wrapper .row {
	margin:10px -15px;
}
.form_wrapper .row > div {
	padding:0 15px;
	box-sizing:border-box;
}
.form_wrapper .col_half {
	width:50%;
	float:left;
}
.form_wrapper label {
	display:block;
	margin:0 0 5px;
}
.form_wrapper .input_field, .form_wrapper .textarea_field {
	position:relative;
}
.form_wrapper .input_field > span, .form_wrapper .textarea_field > span {
	position:absolute;
	left:0;
	top:0;
	color:#333;
	height:100%;
	border-right:1px solid #ccc;
	text-align:center;
	width:30px;
}
.form_wrapper .textarea_field > span {
	border-bottom:1px solid #ccc;
	max-height:35px;
}
.form_wrapper .input_field > span > i, .form_wrapper .textarea_field > span > i {
	padding-top:12px;
}
.form_wrapper input[type="text"], .form_wrapper input[type="email"], .form_wrapper input[type="tel"], textarea {
	width:100%;
	padding:10px 10px 10px 35px;
	border:1px solid #ccc;
	box-sizing:border-box;
	outline:none;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.form_wrapper textarea {
	height:8em;
}
.form_wrapper input[type="text"]:focus, .form_wrapper input[type="email"]:focus, .form_wrapper input[type="tel"]:focus, textarea:focus {
	-webkit-box-shadow:0 0 2px 1px rgba(255, 169, 0, 0.5);
	-moz-box-shadow:0 0 2px 1px rgba(255, 169, 0, 0.5);
	box-shadow:0 0 2px 1px rgba(255, 169, 0, 0.5);
	border:1px solid #f5ba1a;
}
.form_wrapper input[type="submit"] {
	background:#f5ba1a;
	height:50px;
	line-height:50px;
	width:100%;
	border:none;
	outline:none;
	cursor:pointer;
	color:#fff;
	font-size:1.2em;
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
}
.form_wrapper input[type="submit"]:hover, .form_wrapper input[type="submit"]:focus {
	background:#daa106;
}
.credit{
	position:relative;
	z-index:1;
	text-align:center;
	padding:15px;
	color:#f5ba1a;	
}
.credit a{
	color:#daa106;	
}
@media (max-width: 600px) {
.form_wrapper .col_half {
	width:100%;
	float:none;
}
.form_wrapper label {
	margin:10px 0;
}
}
    </style>   
</head>

<body>
    <nav>
        <div class="nav-center">
            <!-- nav header -->
            <div class="nav-header">
                <img src="https://i.postimg.cc/76jNr6VY/1982637.jpg" class="logo" alt="logo" />
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <!-- links -->
            <ul class="links">
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>
                    <a href="about.html">about</a>
                </li>
                <li>
                    <a href="projects.html">projects</a>
                </li>
                <li>
                    <a href="contact.html">contact</a>
                </li>
            </ul>
            <!-- social media -->
            <ul class="social-icons">
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-behance"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.twitter.com">
                        <i class="fab fa-sketch"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="bg_img"></div>
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Clean and Responsive Contact Form</h2>
      <h3>Created with pure CSS Only!</h3>
    </div>
    <form>
      <div class="row clearfix">
        <div class="col_half">
          <label>First name</label>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
            <input type="text" name="first_name" placeholder="John" required />
          </div>
        </div>
        <div class="col_half">
          <label>Last name</label>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
            <input type="text" name="last_name" placeholder="Doe" />
          </div>
        </div>
      </div>
      <div class="row clearfix">
        <div class="col_half">
          <label>Email</label>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
            <input type="email" name="email" placeholder="johndoe@gmail.com" required />
          </div>
        </div>
        <div class="col_half">
          <label>Phone</label>
          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
            <input type="tel" name="phone" placeholder="Phone no" pattern="[0-9]{10}" />
          </div>
        </div>
      </div>
      <div class="row clearfix">
        <div>
          <label>Comments</label>
          <div class="textarea_field"> <span><i aria-hidden="true" class="fa fa-comment"></i></span>
            <textarea cols="46" rows="3" name="comments"></textarea>
          </div>
        </div>
      </div>
      <input class="button" type="submit" value="Sumbit" />
    </form>
  </div>
</div>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>warrior<span>Zone</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Blog</a>
				
					<a href="#">Pricing</a>
				
					<a href="#">About</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Company Name © 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1.555.555.5555</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

</body>

</html>