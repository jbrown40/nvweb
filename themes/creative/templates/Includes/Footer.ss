 <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <% loop $Menu(1) %>
                        <li><a class="$LinkingMode" href="$Link">$MenuTitle</a></li>
                    <% end_loop %>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; NoteVote 2015. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
