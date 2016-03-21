 <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>$Title</h1>
                $Content
                $Form
            </div>
            
                    <% loop $Profiles %>
                        <img src="$ProfilePicture" class="img-circle" alt="">
                        <div>$Name</div>
                        <div>$Title</div>
                        <div>$Content</div>
                    <% end_loop %>
          
        </div>
</header>