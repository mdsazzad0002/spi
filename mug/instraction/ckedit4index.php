<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ck edit powered by this site</title>
	<link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<script  src="ckeditor.js"></script>
	<style type="text/css">
		select,input[type=submit]{
			outline: none;
		    display: block;
		    width: 100%;
		    padding: 10px;
		    border-radius: 5px;
		    margin: 14px 0 10px 0;
		    background: navy;
		    color: white;
		    font-size: 17px;
		    /* font-weight: bold; */
		    font-style: italic;
		}
		select:hover,option:hover{
			
		}
		
	</style>
</head>
<body>
	<form id="ck_from" method="post">
		<textarea id="editor" name="editor">
			
		</textarea>
		<select name="type" class="form-control">
			<option value="ins">institution</option>
			<option value="vis">Vision</option>
		</select>
		<div class="status"></div>
		<input class="btn btn-primary w-100" type="submit" name="submit">
	</form>
	<script src="/assets/vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace('editor');

		$('#ck_from').on('submit',function(e) {
			e.preventDefault();
			$.ajax({
				type:'POST',
				url:'ckeditor4.php',
	            processData: false,
	            contentType: false,
				data:new FormData(this),
				success:function(data) {
					$('.status').html(data);
					setTimeout(function() {
							$('.status').html('');
					},3000)
				}
			})
		})


		
	</script>
<a href="../instraction/">Go back</a>
<p>Note:Dont try close this page.At first check page where come from. if there avialable content then you close this page. thank you</p>
<p>বিদ্রঃ দয়াকরে প্রথমে এই পেজটি কাটবেন না। প্রথমে যে পেজ থেকে এ পেজে এসেছেন ওই পেজে রিলোড দিবেন । যদি আপনার কাঙ্খিতি তথ্য পাওয়া যায় তবে নি সংকোচে কাটতে পারেন। ধন্যবাদ</p>


</body>
</html>