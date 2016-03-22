 <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>$Title</h1>
                $Content
                $Form
            </div>
            
            <div style="width: 200%;">
                
                <% loop $Profiles %>
                    <div style="width: 50%;">
                        <!--put image in div and set background to image-->
                        <div>$Name</div>
                        <div>$Title</div>
                        <div>$Content</div>
                    </div>
                <% end_loop %>
                
                    <br style="clear: left;" />
            </div>
        </div>
</header>