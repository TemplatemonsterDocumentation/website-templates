<h3>RD Mailform</h3>
<p>You can use any form elements, presented on the <b>Components > Toolkit Components > Form Elements</b> page, for implementing
  custom forms with a custom set of fields. You can also use any Bootstrap form-related elements that can be found on the
	<a href="https://getbootstrap.com/docs">Bootstrap Official Website</a> , and Bootstrap Grid and  Flex Grid elements for implementing custom form structure.
</p>

<p class="alert alert-info">Attention: in RD Mailform, <b>&lt;input type="email" name="email"&gt;</b> is required for the correct functioning of the form. If the field is not present, you will get an error, when submitting a form.
</p>
<p>Basic marking for creating a standard form looks the following way:</p>

<pre><code>
&lt;!-- RD Mailform--&gt;
&lt;form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform"&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label for="contact-name" class="form-label"&gt;Name&lt;/label&gt;
    &lt;input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-input"&gt;
  &lt;/div&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label for="contact-phone" class="form-label"&gt;Phone&lt;/label&gt;
    &lt;input id="contact-phone" type="text" name="phone" data-constraints="@Required" class="form-input"&gt;
  &lt;/div&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label for="contact-email" class="form-label"&gt;E-Mail&lt;/label&gt;
    &lt;input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-input"&gt;
  &lt;/div&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label for="contact-message" class="form-label"&gt;Message&lt;/label&gt;
    &lt;textarea id="contact-message" name="message" data-constraints="@Required" class="form-input"&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;button type="submit" class="button button-primary"&gt;Send&lt;/button&gt;
&lt;/form&gt;
</code></pre>

<h3>Mailform type setup</h3>
<p>RD Mailform supports 3 mailform types:</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Contact form</dt>
            <dd>contact;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Order form</dt>
            <dd>order;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Subscription form</dt>
            <dd>subscribe;</dd>
        </dl>
    </li>
</ol>

<p>To change the contact form type, add to HTML marking of the target form <b>'data-form-type'</b> attribute, where you should specify the form type as the value:</p>

<pre><code>
		&lt;form class='rd-mailform' data-form-type="contact" method="post" action="bat/rd-mailform.php"&gt;
				...
		&lt;/form&gt;
</code></pre>

<h3>Mail configuration for messages delivery</h3>

<p>Form sends messages to specific email address, defined in <b>bat/rd-mailform.config.json</b> file in <b>"recipientEmail"</b> variable. You may set any number of email addresses, separated by space or comma.</p>
<ol class="index-list">
  <li><p>Separated by space:</p>
    <pre><code>
      "recipientEmail": "test@demolink.com test2@demolink.com"
    </code></pre>
  </li>
  <li><p>Separated by comma:</p>
    <pre><code>
      "recipientEmail": "test@demolink.com,test2@demolink.com"
    </code></pre>
  </li>
</ol>

<h3>Form fields setup</h3>

<p>RD Mailform supports the following field the following field types:</p>

<ol class="index-list">
    <li><p>Text field:</p>
        <pre><code>
                ...
                &lt;div class="form-wrap"&gt;
                    &lt;label for="contact-us-name" class="form-label form-label-outside"&gt;Name:&lt;/label&gt;
                    &lt;input id="contact-us-name" type="text" name="name"
                            data-constraints="@Required" class="form-input"&gt;
                &lt;/div&gt;
                ...
            </code></pre>
    </li>
    <li>
        <p>Date and time selection menu.
          This menu supports 3 display types:</p>

      <ul class="marked-list">
            <li>
                <dl class="inline-term">
                    <dt>Time selection</dt>
                    <dd>time;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Date selection</dt>
                    <dd>date;</dd>
                </dl>
            </li>
            <li>
                <dl class="inline-term">
                    <dt>Time and date selection</dt>
                    <dd>datetime.</dd>
                </dl>
            </li>
        </ul>
            <p>To choose one of the display types, please use the <b>'date-time-picker'</b> with the necessary value:</p>

                <pre><code>
                        ...
                        &lt;div class="form-wrap"&gt;
                         &lt;label for="rd-mailform-time" class="form-label form-label-outside"&gt;Time:&lt;/label&gt;
                             &lt;input id="rd-mailform-time" type="text" name="time"
                        date-time-picker="time" class="form-input"&gt;
                        &lt;/div&gt;
                        ...
                    </code></pre>
    </li>
    <li><p>Simple selection menu;</p>
        <pre><code>
                ...
                &lt;div class="form-wrap"&gt;
                    &lt;select data-placeholder="Select an option" name="gender"
                            data-minimum-results-for-search="Infinity" class="form-input"&gt;
                        &lt;option&gt;Male&lt;/option&gt;
                        &lt;option&gt;Female&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
                ...
            </code></pre>
    </li>
    <li>
        <p>Selection menu with subcategories;</p>
            <pre><code>
                ...
                &lt;div class="form-wrap"&gt;
                    &lt;select data-placeholder="Select an option" name="gender"
                            data-minimum-results-for-search="Infinity" class="form-input select-filter"&gt;
                        &lt;optgroup label="Category 1"&gt;
                            &lt;option&gt;Demo Item 1-1&lt;/option&gt;
                            &lt;option&gt;Demo Item 1-2&lt;/option&gt;
                            &lt;option&gt;Demo Item 1-2&lt;/option&gt;
                        &lt;/optgroup&gt;
                        &lt;optgroup label="Category 2"&gt;
                            &lt;option&gt;Demo Item 2-1&lt;/option&gt;
                            &lt;option&gt;Demo Item 2-2&lt;/option&gt;
                            &lt;option&gt;Demo Item 2-3&lt;/option&gt;
                        &lt;/optgroup&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
                ...
            </code></pre>
    </li>
    <li>
        <p>Textarea:</p>

        <pre><code>
        ...
        &lt;div class="form-wrap"&gt;
            &lt;label for="message" class="form-label form-label-outside"&gt;Message:&lt;/label&gt;
            &lt;textarea id="message" name="message" data-constraints="@Required"
                                                    class="form-input"&gt;&lt;/textarea&gt;
        &lt;/div&gt;
        ...
        </code></pre>
    </li>
</ol>

<h4>Form fields validation setup</h4>
<p>For dynamic validation of the form fields the mailform uses the <b>Regula</b> library. A link to Regula documentation can be found in <b>Credits</b> section.</p>
<h4>Information messages setup</h4>
<p><b>RD Mailform</b> supports custom messages that inform about successful/unsuccessful sending of the form.</p>

<p>To change some default information messages, change the value of the msg field of the target validation type in script initialization file <b>(scripts.js)</b> in <b>RD Mailform</b> module:</p>
<pre><code>
        msg = {
        'MF000': 'Successfully sent!',
        'MF001': 'Recipients are not set!',
        'MF002': 'Form will not work locally!',
        'MF003': 'Please, define email field in your form!',
        'MF004': 'Please, define type of your form!',
        'MF254': 'Something went wrong with PHPMailer!',
        'MF255': 'Aw, snap! Something went wrong.'
        };
    </code></pre>

<h4>SMTP server setup</h4>

<p><a href="index.php?lang=ru&section=template_customization#mailform-settings">Instruction</a></p>

<p class="alert alert-info">Attention: mailform extension will not work on the local server. To send a mailform, upload your website to the hosting server you use.</p>

<h4>Configuring spam and abuse protection</h4>

<p><b>RD Mailform</b> uses <b>Google reCAPTCHA</b> for spam protection.  </p>
<p class="alert alert-info"> Pay attention: in order to disable Google reCAPTCHA, just delete a section of html code, wrapped in comments  "&lt;!--Google captcha--&gt;" - "&lt;!-- End google captcha--&gt;".</p>
<h6>Getting Started with Google ReCaptcha</h6>

<p>To manage Google ReCaptcha, you should:</p>


<ol class="index-list">
  <li>
    <p>Register your domain at  <a href="https://www.google.com/recaptcha/admin#list">Google reCaptcha</a> website and get a pair of API-keys (a pair of keys consists of
      <b>site key</b> and <b>secret</b>). </p>
  </li>
  <li>
    <p>Specify your API-keys in <b>bat/reCaptcha.php</b> file in <b>$siteKey</b> and <b>$secret</b> variables at the beginning of the file:</p>
    <pre><code>
        $siteKey = 'You site key here';
        $secret = 'You secret key here';
      </code></pre>
  </li>
  <li>
    <p>Paste this section to html and specify your site key in <b>data-attribute</b> <b>data-sitekey=""</b></p>
  </li>
</ol>
<p> You can find more detailed instructions at <a href="https://developers.google.com/recaptcha/docs/start">Google ReCaptcha</a> official website.</p>

<h4>Google ReCaptcha Marking</h4>
<p>The basic marking for ReCaptcha looks the following way:</p>
<pre><code>
&lt;!--Google captcha--&gt;
  &lt;div class="form-wrap"&gt;
    &lt;div id="captcha1" data-sitekey="You site key here" class="recaptcha"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;!-- End google captcha--&gt;
  </code></pre>

<p class="alert alert-info">Pay attention: <b>id</b> attribute and <b>.recaptcha</b> class are required.</p>

<h4>Google ReCaptcha Setup</h4>
<p>Google Recaptcha supports the following settings:</p>
<ul class="marked-list">
  <li>Changing size;</li>
  <li>Changing color scheme.</li>
</ul>

<h4>Changing Google ReCaptcha Size</h4>
<p>To change widget size, specify in data-attribute <b>data-size</b> one of the following size values:</p>

<ul class="marked-list">
  <li>compact;</li>
  <li>normal (default).</li>
</ul>
<p>The sample code looks the following way:</p>

<pre><code>
&lt;!--Google captcha--&gt;
  &lt;div class="form-wrap"&gt;
    &lt;div id="captcha1" data-sitekey="You site key here" data-size="compact" class="recaptcha"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;!-- End google captcha--&gt;
  </code></pre>

<h4>Changing Google ReCaptcha widget color scheme</h4>
<p>To change widget color scheme, specify in the data-attribute <b>data-theme</b> one of the following variants:</p>

<ul class="marked-list">
  <li>dark;</li>
  <li>light (default).</li>
</ul>

<p> Sample code looks the following way:</p>
<pre><code>
&lt;!--Google captcha--&gt;
  &lt;div class="form-wrap"&gt;
    &lt;div id="captcha1" data-sitekey="You site key here" data-theme="dark"class="recaptcha"&gt;&lt;/div&gt;
  &lt;/div&gt;
&lt;!-- End google captcha--&gt;
  </code></pre>