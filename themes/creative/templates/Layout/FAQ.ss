 <div class="header">
        <div class="header-content">
            <div class="header-content-inner">
                <h1>$Title</h1>
                <% loop $QAndA %>
                	<h5 class="questions">$Question</h5>
                	<h6 class="answers">$Answer</h6>
                <% end_loop %>
                $Form
            </div>
        </div>
</div>