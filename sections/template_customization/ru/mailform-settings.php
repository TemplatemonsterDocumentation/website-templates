<h3>Настройка Почтовой формы</h3>
<p>Bootstap Template использует набор плагинов <b>RD Mailform</b> для реализации контактных форм.
    Подробную информацию по данным плагинам вы можете найти в разделе <b><a href="../index.php?lang=ru&section=extensions#rd-mailform">Extensions > RD Mailform</a></b>.
</p>

<p>Для того, чтобы указать email адрес, на который будут приходить сообщения, отправляемые с помощью
  <b>RD Mailform @version 3.0.0</b> необходимо в файле <b>js/script.js</b> вашего сайта, в секции с инициализацией RD Mailform заменить email, указанный в переменной <b>recipients</b>, на соответствующий email  получателя.
</p>
<pre><code>recipients = 'test@demolink.com';</code></pre>
<br>
<img src="img/mailform-3.jpg" alt="">

<p>
  Если версия не указана или она меньше 3.0.0, то чтобы указать email адрес, на который будут приходить сообщения, необходимо в файле <b>bat/rd-mailform.php</b> вашего сайта заменить email, указанный в переменной <b>$recipients</b>, на соответствующий email  получателя.
</p>
<pre><code>$recipients = 'test@demolink.com';</code></pre>
