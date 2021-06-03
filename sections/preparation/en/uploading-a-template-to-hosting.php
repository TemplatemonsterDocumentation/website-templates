<h3>Uploading a template to hosting</h3>
<p>
    To make your website live, you need to upload all content directories <b>dist/</b> (or <b>dist/&lt;website template&gt;/</b> in project with multiple templates) from your local computer to a hosting server.
</p>

<p class='alert alert-info'>
    Pay attention: a root directory of a website depends on the internal structure of your hosting server. If you upload <b>dist/</b> (or <b>dist/&lt;website template&gt;/</b>) folder to the hosting server, then the root of your website will be <b>http://your_domain_name/dist</b>. For the root of your website to be <b>http://your_domain_name</b>, please open the <b>dist/</b> (or <b>dist/&lt;website template&gt;/</b>) folder and add its content to your hosting server.
</p>

<p class='alert alert-danger'>
    Attention: do not upload <b>dev/</b> folder or any source file of the template to your hosting server.
</p>