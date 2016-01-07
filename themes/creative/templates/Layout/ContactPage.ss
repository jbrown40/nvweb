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


    <% include TopBar %>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>$Title</h1>
	                <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
						<div class="row">
							<label for="name">Your name:</label><br />
							<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
						</div>
						<div class="row">
							<label for="email">Your email:</label><br />
							<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
						</div>
						<div class="row">
							<label for="message">Your message:</label><br />
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
