<!--<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>$Title</h1>
                $Content
                $Form
            </div>
        </div>
    </header>-->

<body id="page-top">


    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>$Title</h1>
                $Content
	                <form class="contact-form" id="contact_form" action="mailto:$Email" method="POST" enctype="multipart/form-data">
						<div class="row">
							<label class="contact-label" style="color: black" for="name">Your name:</label>
							<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
						</div>
						<div class="row">
							<label for="email" style="color: black" class="contact-label">Your email:</label>
							<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
						</div>
						<div class="row">
							<label for="message" style="color: black" class="contact-label">Your message:</label>
							<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
						</div>
						<input id="submit_button" type="submit" value="Send email" />
					</form>	
            </div>
        </div>
    </header>

    <!--<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to NoteVote:</h2>
                </div>
                
            </div>

        </div>
        <!-- /.container -->

    <!--</div>
    <!-- /.banner -->


    
</body>

</html>
