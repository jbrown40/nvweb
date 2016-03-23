 <header>
        <div class="header-content" style="padding-bottom: 50px;">
            <div class="header-content-inner">
                <h1 style="padding-top: 100px;">$Title</h1>
                $Content
                $Form
            </div>
            
            <div style="width: 200%;">

                <ul class="wrapper">
                    <% loop $Profiles %>
                    <li>
                        <div style="width: 50%;">
                            <img class="icon" src="$ThemeDir/img/logo2.jpg">
                            <h3>$Name</h3>
                            <p>$Title</p>
                            <p>$Content</p>
                        </div>
                    </li>
                    <% end_loop %>
                </ul>
            </div>
        </div>
</header>