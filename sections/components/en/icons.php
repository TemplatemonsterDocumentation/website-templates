<h3>Icons</h3>

<figure class="img-polaroid">
    <img src="img/icons.png" alt="">
</figure>

<h6>HTML Website Templates icons are defined similarly to buttons:</h6>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.icon</dt>
            <dd>main icon class;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.icon-xs, .icon-sm, .icon-md, .icon-lg, .icon-xl</dt>
            <dd> icon layout classes, responsible for its sizing;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.icon-default, .icon-primary, .icon-secondary-*</dt>
            <dd>icon styling classes, responsible for its text and background colors.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>fa-*, fl-*, material-design-*, etc.</dt>
            <dd>classes, responsible for icon code (symbol) inserting</dd>
        </dl>
    </li>
</ul>

<p class="alert alert-warning">Please note: variability of classes, responsible for icon code (symbol) inserting, depends on exact template. Some template may include few icon packages, and another one - just one package. List of all available classes for icon code (symbol) inserting is available on shortcodes.php page, located in template folder.</p>

<p>For example,</p>
<code>&lt;i href="#" class="icon icon-md icon-default"&gt;&lt;/i&gt;</code>
<p>This code creates middle-sized icon with template primary color styling.</p>