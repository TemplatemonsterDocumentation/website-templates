<h3>MailChimp</h3>
<p>
  To connect the subscription form to your <a href="https://mailchimp.com/">MailChimp</a> account, you need to create a list or select an
  existing one (see No. 1) and go to “Signup forms” section (No. 2).
</p>

<img src="img/mailchimp.png" alt="">
<hr>

<h6>
  Select “General forms”.
</h6>
<img src="img/mailchimp-2.png" alt="">
<hr>

<h6>
  Copy the link from “Signup form URL” field and enter it in the address field of your browser.
</h6>
<img src="img/mailchimp-3.png" alt="">
<hr>

<h6>
  You will be redirected to another page, where you need to copy the URL:
</h6>
<img src="img/mailchimp-4.png" alt="">

<p>
  You need to add <mark>/post</mark> to this link after the word <mark>subscribe</mark> for the link to look like
</p>

<pre><code>https://********.***.list-manage.com/subscribe/post?u=*******************&id=*********</code></pre>

<h6>Paste this link into action attribute of the subscription form, see the example below:</h6>

<pre><code>&lt;form class="mailchimp-mailform"
    data-form-output="form-output-global"
    <span class="color-2">action="https://templatemonster.us15.list-manage.com/subscribe/post?u=ba5bb362073a413f48e4a7b90&amp;id=8dc95d9dec"</span>
    method="post"&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label class="form-label rd-input-label" for="inline-email"&gt;Enter your e-mail&lt;/label&gt;
    &lt;input class="form-input" id="inline-email" type="email" name="EMAIL" data-constraints="@Email @Required"&gt;
  &lt;/div&gt;
  &lt;button class="button button-primary" type="submit"&gt;Subscribe&lt;/button&gt;
&lt;/form&gt;</code></pre>

<h6>Done!</h6>