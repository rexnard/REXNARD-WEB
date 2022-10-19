<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>REXNARD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='index.html'> </a>
            </div>
            <div>
      <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@rexnard/video/7076597924213394690" data-video-id="7076597924213394690" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@rexnard" href="https://www.tiktok.com/@rexnard?refer=embed">@rexnard</a> <p>American Authors - Best Day Of My Life (Lyrics)</p> <a target="_blank" title="♬ original sound  - Rheyxs Fernandez" href="https://www.tiktok.com/music/original-sound-Rheyxs-Fernandez-7076598006854978306?refer=embed">♬ original sound  - Rheyxs Fernandez</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
            
            </div>
            <nav>
                <ul id='SELECTION'>
                    <li><a href='index.html'>Home</a></li>
                    <li><a href='pages/aboutus.html'>About Me</a></li>
                    <li><a href='#'>Services</a></li>
                    <li><a href='page1/Contactus.html'>Contact</a></li>
<li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>
            </nav>
          <div>                 
            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@rexnard/video/7132527432107609345" data-video-id="7132527432107609345" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@rexnard" href="https://www.tiktok.com/@rexnard?refer=embed">@rexnard</a> <a title="negrosoccidental" target="_blank" href="https://www.tiktok.com/tag/negrosoccidental?refer=embed">#negrosoccidental</a> <a target="_blank" title="♬ original sound  - Rheyxs Fernandez" href="https://www.tiktok.com/music/original-sound-Rheyxs-Fernandez-7132527458326170370?refer=embed">♬ original sound  - Rheyxs Fernandez</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
            </div>

        </div>

        
        <div id='login-form'class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                
                <form id='login' class='input-group-login'>
                    <input type='text'class='input-field'placeholder='Email Id' required >
		    <input type='password'class='input-field'placeholder='Enter Password' required>
		    <input type='checkbox'class='check-box'><span>Remember Password</span>
		    <button type='submit'class='submit-btn'>Log in</button>
		 </form>
                
		 <form id='register' class='input-group-register'>
		     <input type='text'class='input-field'placeholder='First Name' required>
		     <input type='text'class='input-field'placeholder='Last Name ' required>
		     <input type='email'class='input-field'placeholder='Email Id' required>
		     <input type='password'class='input-field'placeholder='Enter Password' required>
		     <input type='password'class='input-field'placeholder='Confirm Password'  required>
		     <input type='checkbox'class='check-box'><span>I agree to the terms and                                                   conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	         </form>
            </div>
        </div>
    </div>
    
    
    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
