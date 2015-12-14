<h3>RD Navbar. Navigation panel</h3>
<figure class="img-polaroid">
    <img src="img/navbar.png" alt="">
</figure>

<h6>HTML Website Templates use <b>RD Navbar</b> extension to implement site navigation functionality. Basic HTML code structure for this extension looks as follows:</h6>

<pre><code>  &lt;!-- RD Navbar --&gt;
  &lt;div class="rd-navbar-wrap"&gt;
      &lt;nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static"&gt;
          &lt;div class="rd-navbar-inner"&gt;

              &lt;!-- RD Navbar Collapse --&gt;
              &lt;div class="rd-navbar-collapse"&gt;
                  &lt;button class="rd-navbar-collapse-toggle"&gt;
                      &lt;span&gt;&lt;/span&gt;
                  &lt;/button&gt;
                  &lt;ul class="rd-navbar-collapse-items list"&gt;
                      &lt;li&gt;
                          ...
                      &lt;/li&gt;
                  &lt;/ul&gt;
              &lt;/div&gt;
              &lt;!-- END RD Navbar Collapse --&gt;

              &lt;!-- RD Navbar Panel --&gt;
              &lt;div class="rd-navbar-panel"&gt;

                  &lt;!-- RD Navbar Toggle --&gt;
                  &lt;button class="rd-navbar-toggle"&gt;&lt;span&gt;&lt;/span&gt;&lt;/button&gt;
                  &lt;!-- END RD Navbar Toggle --&gt;

                  &lt;!-- RD Navbar Brand --&gt;
                  &lt;div class="rd-navbar-brand"&gt;
                      ...
                  &lt;/div&gt;
                  &lt;!-- END RD Navbar Brand --&gt;

              &lt;/div&gt;
              &lt;!-- END RD Navbar Panel --&gt;

              &lt;div class="rd-navbar-nav-wrap"&gt;
                  &lt;!-- RD Navbar Search --&gt;
                  &lt;div class="rd-navbar-search"&gt;
                      &lt;form class="rd-navbar-search-form"
                            action="search.php" method="GET"&gt;
                          &lt;label class="rd-navbar-search-form-input"&gt;
                              &lt;input type="text" name="s"
                                     placeholder="Search.." autocomplete="off"/&gt;
                          &lt;/label&gt;
                          &lt;button class="rd-navbar-search-form-submit"
                                  type="submit"&gt;&lt;/button&gt;
                      &lt;/form&gt;
                      &lt;span class="rd-navbar-live-search-results"&gt;&lt;/span&gt;
                      &lt;button class="rd-navbar-search-toggle"&gt;&lt;/button&gt;
                  &lt;/div&gt;
                  &lt;!-- END RD Navbar Search --&gt;

                  &lt;!-- RD Navbar Nav --&gt;
                  &lt;ul class="rd-navbar-nav"&gt;
                      &lt;li&gt;
                          ...
                      &lt;/li&gt;
                      &lt;li&gt;
                          ...

                          &lt;!-- RD Navbar Dropdown --&gt;
                          &lt;ul class="rd-navbar-dropdown"&gt;
                              &lt;li&gt;
                                  ...
                              &lt;/li&gt;
                          &lt;/ul&gt;
                          &lt;!-- END RD Navbar Dropdown --&gt;
                      &lt;/li&gt;
                      &lt;li&gt;
                          ...

                          &lt;!-- RD Navbar Megamenu --&gt;
                          &lt;ul class="rd-navbar-megamenu"&gt;
                              &lt;li&gt;
                                  ...
                              &lt;/li&gt;
                          &lt;/ul&gt;
                          &lt;!-- END RD Navbar Megamenu --&gt;
                      &lt;/li&gt;
                  &lt;/ul&gt;
                  &lt;!-- END RD Navbar Nav --&gt;
              &lt;/div&gt;
          &lt;/div&gt;
      &lt;/nav&gt;
  &lt;/div&gt;
  &lt;!-- END RD Navbar --&gt;
</code></pre>

<p class="alert alert-warning">Please, note: navbar HTML structure might differ depending on exact template design specifications.</p>

<h4>Navbar layout configuration</h4>
<h6>HTML Website Templates navbar works with 4 different layouts:</h6>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Static</dt>
            <dd>rd-navbar-static</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Wide</dt>
            <dd>rd-navbar-fullwidth</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Mobile</dt>
            <dd>rd-navbar-fixed</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Sidebar</dt>
            <dd>rd-navbar-sidebar</dd>
        </dl>
    </li>
</ol>

<p>In order to change layout for corresponding navigation panel you should just alter <b>data-rd-navbar-lg</b> data attribute value.</p>

<pre><code>  &lt;div class="rd-navbar-wrap"&gt;
      &lt;nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-sidebar"&gt;
          ...
      &lt;/nav&gt;
  &lt;/div&gt;
</code></pre>

<p class="alert alert-warning">Please, note: layout type in <b>data-rd-navbar-lg</b> attribute defines only desktop layout for your panel. Navigation panel appearance for lower resolutions is defined by template design specifications only.</p>

<h4>Dropdown menu configuration</h4>
<p>In order to define navigation panel dropdown menu, you should just add <b>.rd-navbar-dropdown</b> class to corresponding submenu item.</p>

<pre><code>  &lt;div class="rd-navbar-wrap"&gt;
      &lt;nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static"&gt;
          &lt;ul class="rd-navbar-nav"&gt;
              &lt;li&gt;
                  &lt;a href="#"&gt;Menu Link&lt;/a&gt;
                  &lt;ul class="rd-navbar-dropdown"&gt;
                      &lt;li&gt;
                          &lt;a href="#"&gt;Submenu Link 1&lt;/a&gt;
                      &lt;/li&gt;
                  &lt;/ul&gt;
              &lt;/li&gt;
          &lt;/ul&gt;
      &lt;/nav&gt;
  &lt;/div&gt;
</code></pre>

<h4>Mega menu configuration</h4>
<p>In order to define navigation panel mega menu you should add <b>.rd-navbar-megamenu</b> class to corresponding submenu item.</p>

<pre><code>  &lt;div class="rd-navbar-wrap"&gt;
      &lt;nav class="rd-navbar" data-rd-navbar-lg="rd-navbar-static"&gt;
          &lt;ul class="rd-navbar-nav"&gt;
              &lt;li&gt;
                  &lt;a href="#"&gt;Menu Link&lt;/a&gt;
                  &lt;ul class="rd-navbar-megamenu"&gt;
                      &lt;li&gt;
                          … Your Custom HTML Content in 1 Column ...
                      &lt;/li&gt;
                      &lt;li&gt;
                          … Your Custom HTML Content in 2 Column ...
                      &lt;/li&gt;
                  &lt;/ul&gt;
              &lt;/li&gt;
          &lt;/ul&gt;
      &lt;/nav&gt;
  &lt;/div&gt;
</code></pre>

<p>By default columns size and width are calculated automatically, based on space available.</p>