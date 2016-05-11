<h3>RD Mailform</h3>
<p>You can use any form elements, presented on the <b>Components > Toolkit Components > Form Elements</b> page, for implementing
  custom forms with a custom set of fields. You can also use any Bootstrap form-related elements that can be found on the
  <a href="http://getbootstrap.com/css/#forms">Bootstrap Official Website</a> , and Bootstrap Grid and  Flex Grid elements for implementing custom form structure.
</p>

<p class="alert alert-info">Attention: in RD Mailform, <b>&lt;input type="email" name="email"&gt;</b> is required for the correct functioning of the form. If the field is not present, you will get an error, when submitting a form.
</p>
<p>Basic marking for creating a standard form looks the following way:</p>

<pre><code>
        &lt;form data-form-output="form-output-global" method="post"
                        action="bat/rd-mailform.php" class="rd-mailform"&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="contact-us-name" class="form-label form-label-outside"&gt;Name:&lt;/label&gt;
                &lt;input id="contact-us-name" type="text" name="name"
                        data-constraints="@Required" class="form-control"&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="contact-us-email" class="form-label form-label-outside"&gt;E-Mail:&lt;/label&gt;
                &lt;input id="contact-us-email" type="email" name="email"
                        data-constraints="@Required @Email" class="form-control"&gt;
            &lt;/div&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="contact-us-message" class="form-label form-label-outside"&gt;Message:&lt;/label&gt;
                &lt;textarea id="contact-us-message" name="message"
                        data-constraints="@Required" class="form-control"&gt;&lt;/textarea&gt;
            &lt;/div&gt;
            &lt;div class="group-sm text-center text-lg-left offset-top-30"&gt;
                &lt;button type="submit" class="btn btn-primary"&gt;Send&lt;/button&gt;
                &lt;button type="reset" class="btn btn-default"&gt;Reset&lt;/button&gt;
            &lt;/div&gt;
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

<h3>Form fields setup</h3>

<p>RD Mailform supports the following field the following field types:</p>

<ol class="index-list">
    <li><p>Text field:</p>
        <pre><code>
                ...
                &lt;div class="form-group"&gt;
                    &lt;label for="contact-us-name" class="form-label form-label-outside"&gt;Name:&lt;/label&gt;
                    &lt;input id="contact-us-name" type="text" name="name"
                            data-constraints="@Required" class="form-control"&gt;
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
                        &lt;div class="form-group"&gt;
                         &lt;label for="rd-mailform-time" class="form-label form-label-outside"&gt;Time:&lt;/label&gt;
                             &lt;input id="rd-mailform-time" type="text" name="time"
                        date-time-picker="time" class="form-control"&gt;
                        &lt;/div&gt;
                        ...
                    </code></pre>
    </li>
    <li><p>Simple selection menu;</p>
        <pre><code>
                ...
                &lt;div class="form-group"&gt;
                    &lt;label for="select" class="form-label form-label-outside"&gt;Gender:&lt;/label&gt;
                    &lt;select id="select" data-placeholder="Select an option"
                            data-minimum-results-for-search="Infinity" class="form-control"&gt;
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
                &lt;div class="form-group"&gt;
                    &lt;select data-placeholder="Select an option"
                            data-minimum-results-for-search="Infinity" class="form-control select-filter"&gt;
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
        &lt;div class="form-group"&gt;
            &lt;label for="message" class="form-label form-label-outside"&gt;Message:&lt;/label&gt;
            &lt;textarea id="message" name="message" data-constraints="@Required"
                                                    class="form-control"&gt;&lt;/textarea&gt;
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

<p>    SMTP server setup is no way related to the RD Mailform setup.</p>
<p>o send messages through the SMTP server, please refer to the official documentation of the <b>PhpMailer</b> (the library, which is used for sending messages) or refer to a tutorial in the official documentation:
</p>
<a href="http://phpmailer.worxware.com/?pg=examplebsmtp">http://phpmailer.worxware.com</a>

<p class="alert alert-info">Attention: mailform extension will not work on the local server. To send a mailform, upload your website to the hosting server you use.</p>