<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <% loop $Menu(1) %>
                    <li>
                        <a class="$LinkingMode" href="$Link">$MenuTitle</a>
                    </li>
                   <% end_loop %>
                </ul>
</div>