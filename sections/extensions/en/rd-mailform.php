<h3>RD Mail Form. Mail form.</h3>

<figure class="img-polaroid">
    <img src="img/mailform.png" alt="">
</figure>

<p>HTML Website Templates use <b>RD Mail Form</b> extension to implement mail form functionality. Basic form code structure is similar to the one below:</p>

<pre><code>
    &lt;!-- RD Mailform --&gt;
    &lt;form class='rd-mailform' method="post" action="bat/rd-mailform.php"&gt;
        &lt;!-- RD Mailform Type --&gt;
        &lt;input type="hidden" name="form-type" value="contact"/&gt;
        &lt;!-- END RD Mailform Type --&gt;
        &lt;fieldset&gt;
            &lt;label data-add-placeholder data-add-icon&gt;
                &lt;input type="text"
                       name="name"
                       placeholder="Name"
                       data-constraints="@LettersOnly @NotEmpty"/&gt;
            &lt;/label&gt;

            &lt;label data-add-placeholder data-add-icon&gt;
                &lt;input type="text"
                       name="email"
                       placeholder="Email"
                       data-constraints="@Email @NotEmpty"/&gt;
            &lt;/label&gt;

            &lt;label data-add-placeholder data-add-icon&gt;
                &lt;input type="text"
                       name="phone"
                       placeholder="Phone"
                       data-constraints="@Phone"/&gt;
            &lt;/label&gt;


            &lt;label data-add-placeholder&gt;
                &lt;select name="gender"&gt;
                    &lt;option&gt;Gender&lt;/option&gt;
                    &lt;option&gt;Male&lt;/option&gt;
                    &lt;option&gt;Female&lt;/option&gt;
                &lt;/select&gt;
            &lt;/label&gt;

            &lt;label data-add-placeholder data-add-icon&gt;
                &lt;input type="date"
                       name="birthday"
                       data-placeholder="Birthday"
                       data-constraints="@Date"
                    /&gt;
            &lt;/label&gt;

            &lt;label data-add-placeholder&gt;
       &lt;textarea name="message" placeholder="Message"
                 data-constraints="@NotEmpty"&gt;&lt;/textarea&gt;
            &lt;/label&gt;

            &lt;div class="mfControls btn-group"&gt;
                &lt;button class="btn btn-lg btn-primary" type="submit"&gt;Submit&lt;/button&gt;
                &lt;button class="btn btn-lg btn-default" type="reset"&gt;Reset&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="mfInfo"&gt;&lt;/div&gt;
        &lt;/fieldset&gt;
    &lt;/form&gt;
    &lt;!-- END RD Mailform --&gt;
    </code></pre>

<h4>Form mode configuration</h4>

<p>RD Mailform allows to use mail form in three modes:</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>Contact form</dt>
            <dd>contact;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Booking form</dt>
            <dd>order;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>Newsletter form</dt>
            <dd>subscribe;</dd>
        </dl>
    </li>
</ol>

<p>In order to change form working mode you should add hidden form-type field to target form HTML code, where respectable form mode is set as a value.</p>

<pre><code>&lt;!-- RD Mailform --&gt;
&lt;form class='rd-mailform' method="post" action="bat/rd-mailform.php"&gt;
    &lt;!-- RD Mailform Type --&gt;
    &lt;input type="hidden" name="form-type" value="contact"/&gt;
    &lt;!-- END RD Mailform Type --&gt;
&lt;/form&gt;
&lt;!-- END RD Mailform --&gt;
</code></pre>


<h4>Mail configuration for messages delivery</h4>

<p>Form sends messages to specific email address, defined in <b>bat/rd-mailform.php</b> file in <b>$recipients</b> variable. You may set any number of email addresses, separated by space here.</p>

<code>$recipients = "test@demolink.com test2@demolink.com"</code>

<h4>Form fields configuration</h4>
<h6>Mail form RD Mailform allows you to use the following field types:</h6>

<ol class="index-list">
    <li>
        <h6>Text field</h6>
        <pre><code>  ...
  &lt;label data-add-placeholder&gt;
      &lt;input type="text"
             name="name"
             placeholder="Name"
          /&gt;
  &lt;/label&gt;
  ...
</code></pre>
    </li>
    <li>
        <h6>Date selector</h6>
        <pre><code>  ...
  &lt;label data-add-placeholder&gt;
      &lt;input type="date"
             name="date"
             data-placeholder="Date"
          /&gt;
  &lt;/label&gt;
  ...
</code></pre>
    </li>
    <li>
        <h6>Menu selector</h6>
        <pre><code>  ...
  &lt;label data-add-placeholder&gt;
      &lt;select name="select"&gt;
          &lt;option>Option 1&lt;/option&gt;
          &lt;option>Option 2&lt;/option&gt;
          &lt;option>Option 3&lt;/option&gt;
      &lt;/select&gt;
  &lt;/label&gt;
  ...
</code></pre>
    </li>
    <li>
        <h6>Text area</h6>
        <pre><code>  ...
  &lt;label data-add-placeholder&gt;
      &lt;textarea name="message" placeholder="Message"&gt;&lt;/textarea&gt;
  &lt;/label&gt;
  ...
</code></pre>
    </li>
</ol>

<h4>Form fields validation setup</h4>
<p>Mail form <b>RD Mailform</b> supports form fields dynamic validation. You should add data-constraints data attribute to target field HTML code in order to implement this validation for target form.</p>

<h6>There are following validation types available:</h6>
<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>@LettersOnly</dt>
            <dd>field’s value should be set to letters only;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>@NumbersOnly</dt>
            <dd>field’s value should be set to numbers only;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>@NotEmpty</dt>
            <dd>field must be filled in;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>@Email</dt>
            <dd>field’s value should be set to email address;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>@Phone</dt>
            <dd>field’s value should be set to phone number in the international format;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>@Date</dt>
            <dd>field’s value should be set to date in  MM / DD / YYYY format;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>@SelectRequired</dt>
            <dd>at least one of menu options must be selected.</dd>
        </dl>
    </li>
</ol>

<p>For instance,</p>
<pre><code>  ...
  &lt;label data-add-placeholder&gt;
      &lt;textarea name="message" placeholder="Message"
                  data-constraints="@NotEmpty">&lt;/textarea&gt;
  &lt;/label&gt;
  ...
</code></pre>

<h4>Form informing messages configuration</h4>
<p>Mail form <b>RD Mailform</b> allows you to set custom informing messages, such as fields validation error messages or messages on successful/unsuccessful form submitting.</p>
<p>In order to change some default informing messages, you should edit script initialization <b>script.js</b> file, by changing corresponding message field for RD Mailform module target validation type.</p>
<pre><code>  /**
  * @module       RD Mailform
  * @description  Enables RD Mailform Plugin
  */
  ;
  (function ($) {
     ...
     // Form validation messages
     validator: {
        'constraints': {
           '@LettersOnly': {
              message: 'Please use letters only!'
           },
           '@NumbersOnly': {
              message: 'Please use numbers only!'
           },
           '@NotEmpty': {
              message: 'Field should not be empty!'
           },
           '@Email': {
              message: 'Enter valid e-mail address!'
           },
           '@Phone': {
              message: 'Enter valid phone number!'
           },
           '@Date': {
              message: 'Use MM/DD/YYYY format!'
           },
           '@SelectRequired': {
              message: 'Please choose an option!'
           }
        }
     }
     ...
     // Form Submit Messages
     {
        'MF000': 'Sent',
        'MF001': 'Recipients are not set!',
        'MF002': 'Form will not work locally!',
        'MF003': 'Please, define email field in your form!',
        'MF004': 'Please, define type of your form!',
        'MF254': 'Something went wrong with PHPMailer!',
        'MF255': 'Aw, snap! Something went wrong.'
     }
     ...
  })(jQuery);
</code></pre>

<h4>SMTP server configuration</h4>
<p>SMTP server setting does not relate to <b>RD Mailform</b> form settings at all.</p>
<p>In order to send your site messages via SMTP-server you'll need to refer to official PhpMailer (library, used in form) documentation or check this tutorial from official documentation.</p>

<ol class="index-list">
    <li>
        <a href="http://phpmailer.worxware.com/?pg=examplebsmtp">http://phpmailer.worxware.com/?pg=examplebsmtp</a>
    </li>
</ol>

<p class="alert alert-warning">Please, note: mail form extension does not work locally. You should upload site to corresponding hosting server in order to send emails.</p>