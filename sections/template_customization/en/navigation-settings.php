<h3>Template navigation setup</h3>

<h6>Intense uses <b>RD Navbar</b> plugin for implementing website navigation.</h6>

<h4>How to change navigation type on the page</h4>
<p>Intense supports a set of different navigation types for your convenience.</p>
<p>You can use one of the types listed below:</p>

<ul class="marked-list">
    <li>Default</li>
    <li>Sidebar Toggle</li>
    <li>Sidebar Fixed</li>
    <li>Floated</li>
</ul>

<h4>How to set up the dark color scheme for navigation</h4>
<p>To set up the color scheme for navigation, please use the <b>.rd-navbar-dark</b> class for the needed navigation type.</p>

<pre><code>
        &lt;!-- RD Navbar --&gt;
        &lt;nav class="rd-navbar rd-navbar-default rd-navbar-dark" …&gt;
        ...
        &lt;/nav&gt;
    </code></pre>

<h4>Adding a new menu item</h4>

<p>To add a new menu item to an existing menu, you should define a new list element on the first navigation level:</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        &lt;ul class="rd-navbar-nav"&gt;
         &lt;li&gt;
                &lt;a href="path/to/your-page.html&gt;Your Page&lt;/a&gt;
         &lt;/li&gt;
        ...
    </code></pre>

<h4>Making a menu item active</h4>

<p>To make a menu item active, use <b>.active</b> class for a target element:</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
                &lt;li class="active"&gt;
                        &lt;a href="path/to/your-page.html"&gt;Your Page&lt;/a&gt;
                &lt;/li&gt;
        ...
    </code></pre>

<h4>Adding an icon to a menu item</h4>

<p>To add an icon to the existing menu item, use the following marking:</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
        &lt;li&gt;
             &lt;a href="path/to/your-page.html"&gt;
                &lt;span class="rd-navbar-icon mdi mdi-shuffle"&gt;&lt;/span&gt;
                &lt;span class="text-middle"&gt;Your Page&lt;/span&gt;
             &lt;/a&gt;
        &lt;/li&gt;
        ...
    </code></pre>

<p>where  <b>"mdi mdi-shuffle"</b> -  is a class for displaying a target icon. You can find the list of all existing classes on <b>Components > Toolkit Components > Icons</b> page.</p>

<h4>Adding label for the menu item</h4>
<p>To add a label to the existing menu item, please use the following marking:</p>
<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
        &lt;li&gt;
                &lt;a href="path/to/your-page.html"&gt;
                        &lt;span class="text-middle"&gt;Your Page&lt;/span&gt;
                        &lt;span class="rd-navbar-label text-middle label-custom label-xs-custom"&gt;
                        Your Label
                        &lt;/span&gt;
                &lt;/a&gt;
        &lt;/li&gt;
        ...
    </code></pre>
<p class="alert alert-info">Attention: you can use any of the classes, listed on the <b>Components > Toolkit Components > Labels</b> page, for changing label style.</p>

<h4>Adding a submenu</h4>
<p>To add a submenu to the existing menu item, create an additional list with <b>.rd-navbar-dropdown</b> class inside the corresponding menu item:</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
        &lt;li&gt;
                &lt;a href="path/to/your-page.html"&gt;Your Page&lt;/a&gt;
                &lt;ul class="rd-navbar-dropdown"&gt;
                &lt;li&gt;
                        &lt;a href="path/to/your-page-1.html"&gt;Submenu Item 1&lt;/a&gt;
                &lt;/li&gt;
                &lt;li&gt;
                        &lt;a href="path/to/your-page-2.html"&gt;Submenu Item 2&lt;/a&gt;
                &lt;/li&gt;
                ...
                &lt;li&gt;
                        &lt;a href="path/to/your-page-n.html"&gt;Submenu Item N&lt;/a&gt;
                &lt;/li&gt;
                &lt;/ul&gt;
        &lt;/li&gt;
        ...
    </code></pre>

<h4>Adding Megamenu</h4>
<p>To add a Megamenu to the corresponding menu item, please use the following markup:</p>
<pre><code>
    &lt;!-- RD Navbar Nav--&gt;
    ...
    &lt;li&gt;
      &lt;a href="path/to/your-page.html"&gt;Your Page&lt;/a&gt;
      &lt;div class="rd-navbar-megamenu"&gt;
        &lt;div class="row"&gt;
          &lt;ul class="col-lg-3"&gt;
            &lt;li&gt;
              &lt;a href="path/to/your-page-1.html"&gt;Submenu Item 1&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;

          &lt;ul class="col-lg-3"&gt;
            &lt;li&gt;
              &lt;a href="path/to/your-page-2.html"&gt;Submenu Item 2&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;

          &lt;ul class="col-lg-3"&gt;
            &lt;li&gt;
              &lt;a href="path/to/your-page-3.html"&gt;Submenu Item 3&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
          &lt;ul class="col-lg-3"&gt;
            &lt;li&gt;
              &lt;a href="path/to/your-page-4.html"&gt;Submenu Item 4&lt;/a&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/li&gt;
    ...
    </code></pre>
<p><b><a href="http://getbootstrap.com/css/#grid">Bootstrap Grid</a></b> is used for creating Megamenu columns. You can use any number of the columns for creating Megamenu structure.
  However, we recommend using 4-column structure .</p>

<h4>Adding submenus to tabs</h4>
<p>To add submenus to tabs of the existing menu item, please use the following structure:</p>

<pre><code>
        &lt;!-- RD Navbar Nav--&gt;
        ...
        &lt;li&gt;
        &lt;a href="path/to/your-page.html"&gt;Your Page&lt;/a&gt;
          &lt;div class="rd-navbar-megamenu"&gt;
            &lt;!-- Responsive-tabs--&gt;
            &lt;div data-type="horizontal" class="responsive-tabs responsive-tabs-classic"&gt;
              &lt;ul data-group="tabs-group-default" class="resp-tabs-list tabs-1 text-center tabs-group-default"&gt;
                &lt;li&gt;Tab 1&lt;/li&gt;
                &lt;li&gt;Tab 2&lt;/li&gt;
              &lt;/ul&gt;
              &lt;div data-group="tabs-group-default" class="resp-tabs-container text-left tabs-group-default"&gt;
                &lt;div&gt;
                ... Tab 1 Content ...
                &lt;/div&gt;
                &lt;div&gt;
                ... Tab 2 Content ...
                &lt;/div&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/li&gt;
        ...
    </code></pre>
<p>By default, Intense uses Megamenu marking to present the menu content in tabs, but you can also use any custom content there.</p>
