 <div class="header">
        <div class="header-content" style="padding-bottom: 50px;">
            <div class="header-content-inner">
                <h1>$Title</h1>
                $Content
                $Form
            </div>
            
            <section class="wrapper">

                    <% loop $Profiles %>
                        <div class="profiles">
                            <img class="icon" src="$ThemeDir/img/logo2.jpg">
                            <h3>$Name</h3>
                            <p>$Title</p>
                            <p class="description">$Content</p>
                        </div>
                    <% end_loop %>
            </section>
        </div>
</div>