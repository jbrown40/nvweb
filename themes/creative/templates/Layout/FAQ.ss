 <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>$Title</h1>
                <% loop $QAndA %>
                	<h5 style="text-align: left;">$Question</h5>
                	<li style="text-align: left; font-size: 12px;">$Answer</li>
                <% end_loop %>
                $Form
            </div>
        </div>
</header>