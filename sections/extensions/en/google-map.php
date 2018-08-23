<h3>Google Maps</h3>

<p>The plugin supports the following settings:</p>
<ul class="marked-list">
    <li>Google API key setup for the map;</li>
    <li>Changing the map scale;</li>
    <li>Modifying the map&rsquo;s center according to an address or coordinates;</li>
    <li>Setting the map style;</li>
    <li>Adding markers to the map.</li>
</ul>

<h4>Google API key setup for the map</h4>
<p>Without a key, your map will work in demo mode. You can find a guide on getting the key on <a href='https://developers.google.com/maps/documentation/javascript/get-api-key'>developers.google.com</a></p>
<p>Insert the received key into <b>data-key</b> attribute:</p>

<pre><code>
&lt;!-- Google Map--&gt;
&lt;div class="google-map-container" data-key="YOUR_API_KEY"&gt;
    &lt;div class="google-map"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>How to change the map center coordinates</h4>
<p>To replace the map center coordinates with the necessary ones, you need: </p>

<pre><code>
&lt;!-- Google Map--&gt;
&lt;div class="google-map-container"&gt;
    &lt;div class="google-map"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<p>to replace a required address in <b>data-center</b> attribute in .html file with a map in the section. As a result, you will get the following code:</p>

<pre><code>
&lt;!-- Google Map--&gt;
&lt;div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."&gt;
    &lt;div class="google-map"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

<h4>How to add a marker to the map</h4>
<p>To add your marker to the map, you need to add ito the list:</p>
<p>Для того чтобы добавить свой маркер на карту, необходимо в .html файле с картой в список:</p>
<pre><code>
&lt;!-- Google Map--&gt;
...
&lt;ul class="google-map-markers"&gt;
    ...
&lt;/ul&gt;
...
</code></pre>

<p>new position with <b>data-location</b> attribute in .html file with the map. As a result, you will get:</p>

<pre><code>
&lt;!-- Google Map--&gt;
...
&lt;ul class="google-map-markers"&gt;
    &lt;li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45."&gt;&lt;/li&gt;
&lt;/ul&gt;
...
</code></pre>

<h4>Adding a description to the marker</h4>
<p>To add a popup window to a user marker, you need to specify content for the window in <b>data-description</b> attribute:</p>

<pre><code>
&lt;!-- Google Map--&gt;
...
&lt;li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"&gt;&lt;/li&gt;
...
</code></pre>

<h4>How to replace the map style</h4>
<p>The map supports lots of styling variants. You can get different ready-made styling variations on the website: <a href="https://snazzymaps.com/">https://snazzymaps.com/.</a></p>
<p>On the given website you need to copy the style array of a map you prefer and insert it into <b>data-styles</b> attribute of a corresponding map on a target *.html page:</p>

<pre><code>
&lt;!-- Google Map--&gt;
&lt;div class="google-map-container" data-styles='Your Map Styles'&gt;
    ...
&lt;/div&gt;
</code></pre>
