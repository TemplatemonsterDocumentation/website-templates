<h3>Changing the Logo</h3>
<h6>In Intense, you can change 3 types of logos: header logo (for desktop and mobile versions of the site) and footer logo. You can use either custom image or text logo.</h6>

<p class="alert alert-info">Attention: Intense is an HTML product. Thus, the logo should be changed manually in every target .html file.</p>

<h4>Changing the Logo</h4>

<p>Header logo for the desktop version of the site should be changed in Page Head section of the target page with the <b>.rd-navbar-brand</b> class.</p>

<pre><code>
        &lt;!--Navbar Brand--&gt;
        &lt;div class="rd-navbar-brand"&gt;
            &lt;a href="index.html"&gt;
              &lt;img src='path/to/your-logo.png' alt=''/&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    </code></pre>

<h4>How to change header logo for mobile devices</h4>

<p>Header logo for the mobile version is changed in <b>Page Head</b> section with <b>.rd-navbar-mobile-brand</b> class in the same way.</p>

<pre><code>
        &lt;!--Navbar Brand--&gt;
        &lt;div class="rd-navbar-mobile-brand"&gt;
            &lt;a href="index.html"&gt;
                &lt;img src='path/to/your-mobile-logo.png' alt=''/&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    </code></pre>

<h4>How to change footer logo</h4>
<p>Footer logo is changed in <b>Page Footer</b> section of the block with <b>.footer-brand</b> class.</p>

<pre><code>
        &lt; !--Footer Brand--&gt;
        &lt; div class="footer-brand"&gt;
            &lt; a href="index.html"&gt;
                &lt; img src='path/to/your-footer-logo.png' alt=''/&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    </code></pre>
