<script type="text/javascript">
function send_ndisc()
{
	var sj=document.getElementById("subject").value;
	var msg=document.getElementById("message").value;
	$.post("send_new_disc.php?sj="+sj+"&msg="+msg,function(data)
		{
			$("#message_forum").html(data);
		});
}
</script>
<div id="message_forum">
</div>
<div>
	<table cellpadding="5" cellspacing="5">
		<tr><td>Subject:</td><td><input id="subject" type="text"></td></tr>
		<tr><td>Message:</td><td><textarea id="message" rows="10" cols="45"></textarea></td></tr>
		<tr><td clospan=2><input type="submit" id="sbt" value="submit" onclick="send_ndisc()"></tr>
	</table>
</div>
