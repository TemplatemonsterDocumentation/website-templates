<h3>Campaign Monitor</h3>
<p>
  To connect the subscription form to your Campaign Monitor account, you need to go to the Lists page
  (1), create a list (2) or select an existing one (3).
</p>

<img src="img/campain.png" alt="">
<hr>

<h6>
  Go to the “Sign up forms” section.
</h6>

<img src="img/campain-1.jpg" alt="">


<h6>
  Then select the “Copy/paste a form to your site” section.
</h6>

<img src="img/campain-2.png" alt="">

<h6>
  Afterward, generate the form code.
</h6>

<img src="img/campain-3.png" alt="">

<p>
  Finally, copy the <mark>action</mark> attribute of the form you generated and paste it into the form of your website.
  <br>
  Here’s an example of the form code:
</p>

<pre><code>&lt;form action="http://templatemonster1.createsend.com/t/d/s/xlyhhk/" class="subscribe-campaign rd-mailform-inline" data-form-output="form-output-global" method="post"&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label class="form-label" for="campaign-email"&gt;Enter your e-mail&lt;/label&gt;
    &lt;input class="form-input" id="campaign-email" type="email" name="cm-xlyhhk-xlyhhk" required="" data-constraints="@Email @Required"&gt;
  &lt;/div&gt;
  &lt;button class="button button-primary" type="submit"&gt;Subscribe&lt;/button&gt;
&lt;/form&gt;</code></pre>