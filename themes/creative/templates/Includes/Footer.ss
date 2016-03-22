
 <!-- Footer -->
    <footer>
     <!-- container -->
         <!-- Footer -->
        <div class="container">
            <div class="footer-top">
                <div class="small-8 medium-4 large-3 columns">
                    <div class="logo">
                        <img src="$ThemeDir/img/logo2.jpg">
                    </div>        
                </div>
                
                        <div class="social-buttons">
                            <h4> Connect to NoteVote:</h4>

                            <a href="https://twitter.com/notevoteapp" class="soc-icon"><img src="$ThemeDir/img/socicon/twitter.png"></a>
                       
                            <a href="instagram.com" class="soc-icon"><img src="$ThemeDir/img/socicon/github.png"></a>
                       
                            <a href="https://www.facebook.com/NoteVoteApp/" class="soc-icon"><img src="$ThemeDir/img/socicon/facebook.png"></a>
                        </div>



            </div>
        </div><!-- end .container -->
    <div class="footer-bottom">
        <div class="container">
            <div class="large-12 columns" >
                <!--<hr class="bar">-->
                <ul class="list-inline">
                        <% loop $Menu(1) %>
                            <li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
                        <% end_loop %>
                    </ul>
                <div class="col-lg-6">
                    <p class="copyright text-muted small">Copyright &copy; NoteVote 2015. All Rights Reserved</p>
                </div>
            </div>  
        </div>
    </div>

                

        <!-- /.container -->
    </footer>
<!-- /.footer -->


