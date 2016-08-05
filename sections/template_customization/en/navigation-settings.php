<h3>Template navigation setup</h3>

<h6>HTML Website Template uses <b>RD Navbar</b> plugin for implementing website navigation.</h6>

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