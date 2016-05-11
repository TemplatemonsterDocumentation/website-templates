<h3>Настройка контактной формы</h3>
<p>Intense использует набор плагинов <b>RD Mailform</b> для реализации контактных форм.
    Подробную информацию по данным плагинам Вы можете найти в разделе <b><a href="index.php?lang=ru&section=extensions#rd-mailform">Extensions > RD Mailform</a></b>.
</p>

<p>Для того, чтобы указать email адрес, на который будут приходить сообщения, отправляемые с
    помощью <b>RD Mailform</b> необходимо в файле <b>bat/rd-mailform.php</b> вашего сайта заменить email, указанный в переменной <b>$recipients</b>, на соответствующий email получателя. </p>
<pre><code>$recipients = 'your@email.com';</code></pre>
