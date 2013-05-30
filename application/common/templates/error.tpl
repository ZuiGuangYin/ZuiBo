<script type="text/javascript">
<!--
var errWin = window.open("","Error","width=350, height=150");
errWin.document.open("text/html");
errWin.document.write("<b><u>エラーメッセージ</u></b>");
errWin.document.write("<div style='color:Red'><pre>");
{foreach from=$errors item=error}
	errWin.document.write("{$error}<br />");
{/foreach}
errWin.document.write("</pre></div>");
errWin.document.close();
history.back();
-->
</script>
