<!--jQuery Plugin-->
<?php echo js('assets/js/jquery-1.7.1.min.js') ?>

<!-- Wookmark.js -->
<?php echo js('assets/js/jquery.wookmark.js') ?>
<?php echo js('assets/js/main.js') ?>
<script language="JavaScript">

		
</script>
<!-- Enable CSS active pseudo styles in Mobile Safari -->
<script language="JavaScript">
	//<![CDATA[
		
		document.addEventListener("touchstart", function() {},false);
		jQuery(function(){
	        jQuery('.showSingle').click(function(){
	              jQuery('.grid').hide(100);
	              jQuery('.targetDiv').hide(100);
	              jQuery('#div'+$(this).attr('target')).show(100);


	        });

	        jQuery('.showSearch').click(function(){
	        		jQuery('.searchBox').show(100);
	        })
		});
	//]]>
</script>

</div>
</body>
</html>