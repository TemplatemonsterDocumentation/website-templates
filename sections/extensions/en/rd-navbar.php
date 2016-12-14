<h3>RD Navbar. Navigation panel</h3>


<h6>HTML Website Template Template use <b>RD Navbar</b> extension to implement site navigation functionality. Basic HTML code structure for this extension looks as follows:</h6>

<pre><code style='white-space: pre-wrap;'>
        &lt;nav class="rd-navbar rd-navbar-default" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="80px" data-lg-stick-up-offset="46px">
          &lt;div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse">&lt;span>&lt;/span>&lt;/div&gt;
          &lt;div class="rd-navbar-top-panel rd-navbar-collapse"&gt;
            &lt;div class="rd-navbar-top-panel-inner"&gt;
              &lt;address class="contact-info"&gt;
                &lt;ul class="group-lg"&gt;
                  &lt;li&gt;
                    &lt;div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top"&gt;
                      &lt;div class="unit__left"&gt;&lt;span class="icon text-middle fa-phone"&gt;&lt;/span&gt;&lt;/div&gt;
                      &lt;div class="unit__body"&gt;
                        &lt;div class="p"&gt;&lt;a class="text-middle" href="callto:#"&gt;1-800-1234-567&lt;/a&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top"&gt;
                      &lt;div class="unit__left"&gt;&lt;span class="icon text-middle fa-envelope"&gt;&lt;/span&gt;&lt;/div&gt;
                      &lt;div class="unit__body"&gt;
                        &lt;div class="p"&gt;&lt;a class="text-middle" href="mailto:#"&gt;info@demolink.org&lt;/a&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top"&gt;
                      &lt;div class="unit__left"&gt;&lt;span class="icon text-middle fa-map-marker"&gt;&lt;/span&gt;&lt;/div&gt;
                      &lt;div class="unit__body"&gt;
                        &lt;div class="p"&gt;&lt;a class="text-middle" href="contacts.html"&gt;2130 Fulton Street San Diego, CA 94117-1080 USA&lt;/a&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/address&gt;
            &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="rd-navbar-inner"&gt;
            &lt;!-- RD Navbar Panel--&gt;
            &lt;div class="rd-navbar-panel"&gt;
              &lt;!-- RD Navbar Toggle--&gt;
              &lt;button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"&gt;&lt;span&gt;&lt;/span&gt;&lt;/button&gt;
              &lt;!-- RD Navbar Brand--&gt;
              &lt;div class="rd-navbar-brand"&gt;&lt;a class="brand-name" href="index.html"&gt;&lt;img src="images/brand.png" width="180" height="29" alt=""&gt;&lt;/a&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="rd-navbar-aside-right"&gt;
              &lt;div class="rd-navbar-nav-wrap"&gt;
                &lt;!-- RD Navbar Nav--&gt;
                &lt;ul class="rd-navbar-nav"&gt;
                  &lt;li class="active"&gt;&lt;a href="./"&gt;Home&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a href="about.html"&gt;About&lt;/a&gt;
                    &lt;!-- RD Navbar Dropdown--&gt;
                    &lt;ul class="rd-navbar-dropdown"&gt;
                     ...
                    &lt;/ul&gt;
                  &lt;/li&gt;
                  &lt;li&gt;&lt;a href=".html"&gt;Link&lt;/a&gt;
                    &lt;!-- RD Navbar Megamenu--&gt;
                    &lt;ul class="rd-navbar-megamenu"&gt;
                     ...
                    &lt;/ul&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
              &lt;/div&gt;
              &lt;!--RD Navbar Search--&gt;
              &lt;div class="rd-navbar-search"&gt;&lt;a class="rd-navbar-search-toggle" data-rd-navbar-toggle=".rd-navbar-search" href="#"&gt;&lt;span&gt;&lt;/span&gt;&lt;/a&gt;
                &lt;form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET"&gt;
                  &lt;div class="form-wrap"&gt;
                    &lt;label class="form-label form-label" for="rd-navbar-search-form-input"&gt;Type and hit enter...&lt;/label&gt;
                    &lt;input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"&gt;
                    &lt;div class="rd-search-results-live" id="rd-search-results-live"&gt;&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;button class="rd-search-form-submit fa-search"&gt;&lt;/button&gt;
                &lt;/form&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/nav&gt;
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