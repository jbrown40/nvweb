 <!-- Footer -->
    <footer>
     <!-- container -->
         <div class="container">
            <div class="row">
                    <ul class="list-inline">
                        <% loop $Menu(1) %>
                            <li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
                        <% end_loop %>
                    </ul>
                <div class="col-lg-6">
                    <p class="copyright text-muted small">Copyright &copy; NoteVote 2015. All Rights Reserved</p>
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
    </footer>
<!-- /.footer -->


