<script>

		function popupfunction(x)

		{

			document.getElementById('popup'+x).style.display='block';

			document.getElementById('fade'+x).style.display='block';

		}



		function popupclose(x)

		{

			document.getElementById('popup'+x).style.display='none';

			document.getElementById('fade'+x).style.display='none';

		}

		 function displaymycart() {
            document.getElementById('myCartDisplay').style.display = 'block';
        }

        function addItem(x) {
            document.getElementById('myCartDisplay').innerHTML +=  x + "<br>";
			
		}


</script>