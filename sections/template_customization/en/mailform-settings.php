<h3>Mailform setup</h3>
<p>    HTML Website Template uses a set of <b>RD Mailform</b> plugins  for implementing contact forms.
    You can find more detailed instructions about these plugins in <b><a href="index.php?lang=en&section=extensions#rd-mailform">Extensions > RD Mailform</a></b> section.</p>

<p>In order to set up the email address to send the e-mails (sent with the help of <b>RD Mailform @version 3.0.0</b>),
    please replace in <b>js/script.js</b> file, in RD Mailform initialization section, e-mail, which is specified in <b>recipients</b> variable, with the needed recipient's email:</p>
<pre><code>recipients = 'test@demolink.com';</code></pre>
<br>
<img src="img/mailform-3.jpg" alt="">

<p>
  If version is not specified or lower than 3.0.0, you need to set up in <b>bat/rd-mailform.php</b> file the e-mail, which is specified in <b>$recipients</b> variable, with the needed recipient's email:
</p>
<pre><code>$recipients = 'test@demolink.com';</code></pre>

<h4>Configuring SMTP</h4>

<p>To configure sending e-mail using SMTP, you need to open the <b>bat/rd-mailform.php</b> file and set the value of the <b>$isSMTP</b> variable to <b>true</b> in the beginning. Then, enter the settings of your SMTP into <b>$SMTPSettings</b> massive.</p>

<div class="alert alert-info">
  <p>Available from rd-mailform version 3.1.0</p>
</div>