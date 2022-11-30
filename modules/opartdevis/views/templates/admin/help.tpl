{**
* @category Prestashop
* @category Module
* @author Olivier CLEMENCE <manit4c@gmail.com>
* @copyright  Op'art
* @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
**}
<fieldset>
	<legend>{l s='Help' mod='opartdevis'}</legend>
	<strong>{l s='If you require assistance, you can' mod='opartdevis'}:</strong><br />
        <ul>
            <li>{l s='Read the documentation' mod='opartdevis'}<a href="{$moduledir|escape:'htmlall':'UTF-8'}readme_fr.pdf" target="blank">{l s='In french' mod='opartdevis'}</a> {l s='or' mod='opartdevis'} <a href="{$moduledir|escape:'htmlall':'UTF-8'}readme_en.pdf" target="blank">{l s='in english' mod='opartdevis'}</a></li>
            {*** START HIDE FOR PS ***}
            <li><a href="http://www.store-opart.fr/p/25-devis.html" target="blank">{l s='Read the FAQ' mod='opartdevis'}</a></li>
            {*** END HIDE FOR PS ***}
        </ul>
</fieldset>
{*** START HIDE FOR PS ***}
<fieldset>   
    <legend>{l s='Tutorial videos (in French)' mod='opartdevis'}</legend>
    <div style="float:left; margin:0 30px 15px 0;">
        <strong>{l s='General demonstration' mod='opartdevis'}</strong><br />
        <iframe width="853" height="480" src="https://www.youtube.com/embed/kEXVyaliEaY" frameborder="0" allowfullscreen></iframe>
    </div>
</fieldset>

<fieldset>
	<legend>{l s='Stay in touch' mod='opartdevis'}</legend>
	<table style="width:100%">
	<tr>
		<td style="width:25%; text-align:center;">
			<a style="text-decoration: none; display: inline-block; color: #333; text-align: center; font: 13px/16px arial,sans-serif; white-space: nowrap;" href="//plus.google.com/u/0/110689055013102717522?prsrc=3" target="_top" rel="publisher"> <img style="border: 0; width: 64px; height: 64px;" src="//ssl.gstatic.com/images/icons/gplus-64.png" alt="" /><br /> <span style="font-weight: bold;">Olivier Cl&eacute;mence <br /> D&eacute;veloppeur Prestashop</span><br />sur Google+ </a>
		</td>
		<td style="width:25%; text-align:center;">
			<div class="fb-like-box" data-href="https://www.facebook.com/opart.agence.web" data-width="202" data-height="102" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="false" data-show-border="true">&nbsp;</div>
			<div id="fb-root" style="display:inline-block">&nbsp;</div>
			{literal}
			<script>// <![CDATA[
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=458318920918141&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			// ]]></script>
		</td>
		<td style="width:25%; text-align:center;">
			<!--  badge twitter -->
			<a class="twitter-follow-button" href="https://twitter.com/maniT4c" data-show-count="false" data-lang="fr">Suivre @maniT4c</a>
		</td>
		<td style="width:25%; text-align:center;">
			{/literal}<a href="http://www.youtube.com/user/OlivierClemence" title="{l s='youtube channel' mod='opartdevis'}" target="blank"><img src="{$moduledir|escape:'htmlall':'UTF-8'}views/img/youtube.png" alt="{l s='youtube channel' mod='opartdevis'}" width="120" /></a>{literal}
		</td>
	</tr>
	</table>
	<script>// <![CDATA[
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	// ]]></script>
	{/literal}<br />
</fieldset>
<br />
<fieldset>
	<legend>{l s='wan\'t more ?' mod='opartdevis'}</legend>
	<p>{l s='You can also read my blog (in french)' mod='opartdevis'}: <a href="http://www.blog.manit4c.com?utm_source=module&utm_medium=liens">blog.manit4c.com</a></p>
</fieldset>
{*** END HIDE FOR PS ***}