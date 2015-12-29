<!DOCTYPE html>
<html lang="en">

<head>
	<% base_tag %>
    $MetaTags(false)
    <title>$Title</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">


    <% include TopBar %>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>NoteVote</h1>
                $Content
                $Form
            </div>
        </div>
    </header>

    $Layout
    <a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to Start Bootstrap:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="twitter.com" class="btn btn-default btn-lg"><img src="$ThemeDir/img/socicon/twitter.png"></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><img src="$ThemeDir/img/socicon/github.png"></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><img src="$ThemeDir/img/socicon/facebook.png"></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <% include Footer %>


    
</body>

</html>
