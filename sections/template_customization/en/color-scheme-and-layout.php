<h3>Configuring the color scheme and layout</h3>

<h4>
  Replacing main colors
</h4>

<p>
	To replace the main colors of the template, you need to open the file <b>_color-default.scss</b>. In some cases, this file may not be present, and in such instances, you should make the changes directly in the <b>_variables.scss</b> file. Replace the values of variables like <b>$primary, $secondary, $gray-base...</b> (depending on your template) with the necessary colors. Afterward, compile SCSS into CSS.
</p>

<p class="alert alert-warning">
  The following features can be absent depending on your template
</p>

<h4>
  Enabling the Contrast Version of the Template
</h4>

<p>
  To enable the contrasting version of the template, you need to attach the <b>style-contrast.css</b> file instead of <b>style.css</b> <b>style.css</b> inside the <b>head</b> tag.
  If you would like to change the colors of default or contrasting theme, you need to modify the values of variables in the <b>_color-default.scss</b> and <b>_color-contrast.scss</b> files correspondingly.
</p>

<h4>
  Enabling the Boxed Version of the Template
</h4>

<p>
  Add the class <b>boxed</b> to <b>html</b>. Styles can be found in the file <b>style.scss</b>
</p>