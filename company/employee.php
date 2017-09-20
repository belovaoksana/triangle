<?echo привет?>
<b><?echo $employee["NAME"]?></b> <br>
<?$ImagePath = CFile::GetPath( $employee["PREVIEW_PICTURE"]);?>
<img
class="preview_picture"
src="<?=$ImagePath?>"
width="115"
height="150"
style="float:left, margin:10px"
/><br
<?echo $employee ["~DETAIL_TEXT"]?> <br>
</div>
