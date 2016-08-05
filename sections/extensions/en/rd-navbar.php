<h3>RD Navbar. Navigation panel</h3>


<h6>HTML Website Template Template use <b>RD Navbar</b> extension to implement site navigation functionality. Basic HTML code structure for this extension looks as follows:</h6>

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
<h6>HTML Website Template Template navbar works with 4 different layouts:</h6>

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

<p>In order to change layout for corresponding navigation panel you should just alter  <b>“data-layout”</b>  attribute value.</p>
<p>In order to  enable/disable stick-up dropdown menu just edit <b>“data-stick-up”</b> attribute value (true/false).</p>
<p>In order to  enable/disable  dropdown menu on hover just edit <b>“data-hover-on”</b> attribute value (true/false).</p>

<pre><code>  &lt;div class="rd-navbar-wrap"&gt;
      &lt;nav class="rd-navbar" data-layout="rd-navbar-fixed" data-hover-on="false" data-stick-up="false"&gt;
          ...
      &lt;/nav&gt;
  &lt;/div&gt;
</code></pre>

<p class="alert alert-warning">Please note:  data attributes <b>data-layout</b>, <b>data-stick-up</b>,
    <b>data-hover-on</b>  can be defined for all main dimension types as <b>data-xx-layout</b>, <b>data-xx-stick-up</b>,
    <b>data-xx-hover-on</b> (where <b>xx</b>  can take <b>xs</b>, <b>sm</b>, <b>md</b>. <b>lg</b> values). Navigation panel appearance for lower resolutions is defined by template design specifics only.</p>

<h6>RD Navbar supports managing layout with the help of data-attributes:</h6>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>data-layout</dt>
            <dd>sets default navbar layout.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-sm-layout</dt>
            <dd>sets navbar layout for SM resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-md-layout</dt>
            <dd>sets navbar layout for MD resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-lg-layout</dt>
            <dd>sets navbar layout for LG resolution.</dd>
        </dl>
    </li>
</ol>

<h4>Setting navbar layout type for mobile devices</h4>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>data-sm-device-layout</dt>
            <dd>sets navbar layout type for mobile devices with SM resolution.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-md-device-layout</dt>
            <dd>sets navbar layout type for mobile devices with MD resolution.
            </dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-lg-device-layout</dt>
            <dd>sets navbar layout type for mobile devices with LG resolution.</dd>
        </dl>
    </li>
</ol>

<p class="alert alert-warning">Pay attention:  <b>data-md-device-layout='rd-navbar-fullwidth'</b>, <b>data-lg-device-layout="rd-navbar-static"</b> attributes are required. Otherwise, touchpad desktops will display navbar layout for mobile devices.</p>


<h4>Offset for stick up on scroll setup</h4>
<p>RD Navbar supports setting up the offset, on which the navbar will stick up. Use data-(*)-stick-up-offset attribute for this:</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>data-sm-stick-up-offset</dt>
            <dd>sets navbar stick-up offset for SM resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-md-stick-up-offset</dt>
            <dd>sets navbar stick-up offset for MD resolution.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-lg-stick-up-offset</dt>
            <dd>sets navbar stick-up offset for LG resolution.</dd>
        </dl>
    </li>
</ol>

<p>You can specify the exact offset value, as well as navbar height ratio.</p>

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