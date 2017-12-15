<!-- Footer -->
                    <footer class="page-footer">
                        <div class="footer-copyright">
                            <div class="container">
                                <center>
                                    <p>PBO Global © 2017 All Rights Reserved</p>
                                    <a href="#" class="fa fa-facebook  tooltipped" data-position="top" data-delay="50" data-tooltip="Facebook"></a>
                                    <a href="#" class="fa fa-twitter  tooltipped" data-position="top" data-delay="50" data-tooltip="Twitter"></a>
                                    <a href="#" class="fa fa-linkedin  tooltipped" data-position="top" data-delay="50" data-tooltip="LinkedIn"></a>
                                </center> 
                            </div>
                        </div>       
                    </footer>
<!--End of Footer -->


<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12">	
				<div class="form">
			
					<form action="#">

						<img src="img/pbobig.png" width="15%" height="20%">

						<div class="input-group col-md-8 col-md-offset-2">
							<i class="material-icons iconis prefix">account_box</i>
                            <input type="email" name="email" class="input email" autocomplete="off">
							<label>E-Mail Address</label>
						</div>
					
						<div class="input-group col-md-8 col-md-offset-2">
							<i class="material-icons iconis prefix">enhanced_encryption</i>
                            <input type="password" name="password" class="input password">
							<label>Password</label>
						</div>
				
						<div class="input-group">
							<div class="col-md-4 col-md-offset-4">
								<button type="button">
									LOGIN
								</button>							
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
<script>
(function(){
            var inputs = document.querySelectorAll('.form .input-group input');
			var button = document.getElementById('login');

            inputs.forEach((input) => {
                input.addEventListener('focusout', (e) => {
                    if (e.target.value === "") {
                        return e.target.classList.remove('has-value');
                    }

                    return e.target.classList.add('has-value');
                });
            });
        })();
</script>


* {
    box-sizing: border-box;
  }
/*   
  html {
    font-size: 14px;
  } */
  
  body {
    background-color: #101755;
    color: #454749;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
  }
  

  .form{
    background-color: #101755;
    border-radius: .1rem;
    box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.2), 0 0.25rem 0.25rem rgba(0, 0, 0, 0.2);
    position: relative;
    width: 100%;
    min-width:30%;
    max-width: 50%;
    overflow: hidden;
  }

/* html, body{
    height: 100%;
} */
/* 
body{
    display: flex;
    align-items: center;
    background-color: #f3f5fa;
    font-family: lato;
} */

.input-group{
    margin-bottom: 30px;
    position: relative;
}

.input{
    display: block;
    width: 100%;
    height: 30px;
    border: 0;
    border-bottom: 2px solid #ddd;
    padding: 1.6em;
    box-sizing: border-box;
    background: none;
    outline: none;
    color: #78909c;
    transition: all 0.2s ease-in;
} 

.input:focus{
    border-bottom: 2px solid #101755;
}

label{
     position: absolute;
     top: 35%;
     left: 39px;
     color: #B0BEC5;
     pointer-events: none;
     font-size: meduim;
     transition: all 0.3s ease;
} 

.input-group input:focus + label,
.input-group input.has-value + label{
    top: -10px;
    font-size: xx-small;
}

.form{
    background-color: #f7f8f9;
    padding: 50px;
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 33px 0px rgba(219,221,255,0.46);
    -moz-box-shadow: 0px 0px 33px 0px rgba(219,221,255,0.46);
    box-shadow: 0px 0px 33px 0px rgba(219, 225, 255, 0.46); 
}

/* .form h1 {
    text-align: center;
    margin: 0 0 50px 0;
    font-weight: 100;
    font-size: 60px;
    color: #615DEC;
} */

button {
    display: block;
    width: 90%;
    border: none;
    border-radius: 20px;
    padding: 15px;
    box-shadow: 0 5px 17px -2px rgba(102, 127, 255, 0.5);
    color: #fff;
    cursor: pointer;
    outline: none;
    transition: all 0.3s cubic-bezier(0.65, 0.05, 0.36, 1);
    background: #101755; 
}
button:active{
    background-color: #121c63;
}
hr {
    border: 0;
    border-top: 1px solid #e3e2ff;
    margin-bottom: 30px;
}
.email{
    background: url(data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22iso-8859-1%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2016.0.0%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3C%21DOCTYPE%20svg%20PUBLIC%20%22-//W3C//DTD%20SVG%201.1//EN%22%20%22http%3A//www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd%22%3E%0A%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20version%3D%221.1%22%20id%3D%22Capa_1%22%20x%3D%220px%22%20y%3D%220px%22%20width%3D%2225px%22%20height%3D%2225px%22%20viewBox%3D%220%200%20612.011%20612.011%22%20style%3D%22enable-background%3Anew%200%200%20612.011%20612.011%3B%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cg%3E%0A%09%3Cg%20id%3D%22Shape_17%22%3E%0A%09%09%3Cg%3E%0A%09%09%09%3Cpath%20d%3D%22M612%2C156.232c0-13.065-5.16-24.885-13.393-33.897c-0.137-0.179-0.168-0.39-0.316-0.57%20%20%20%20%20c-0.137-0.158-0.327-0.222-0.475-0.369c-9.361-9.794-22.553-15.988-37.243-15.988H51.437c-14.69%2C0-27.882%2C6.194-37.264%2C15.988%20%20%20%20%20c-0.137%2C0.147-0.338%2C0.211-0.475%2C0.38c-0.148%2C0.169-0.179%2C0.39-0.316%2C0.57C5.161%2C131.358%2C0%2C143.167%2C0%2C156.232v299.546%20%20%20%20%20c0%2C13.382%2C5.372%2C25.486%2C13.962%2C34.573c0.169%2C0.189%2C0.222%2C0.422%2C0.412%2C0.602c0.063%2C0.063%2C0.137%2C0.073%2C0.201%2C0.137%20%20%20%20%20c9.361%2C9.541%2C22.394%2C15.514%2C36.863%2C15.514h509.136c14.469%2C0%2C27.513-5.983%2C36.863-15.523c0.063-0.054%2C0.137-0.074%2C0.2-0.127%20%20%20%20%20c0.18-0.169%2C0.232-0.401%2C0.401-0.581c8.601-9.086%2C13.973-21.201%2C13.973-34.594V156.232H612z%20M411.687%2C290.175l176.368-146.238%20%20%20%20%20c1.73%2C3.757%2C2.754%2C7.904%2C2.754%2C12.294v299.546c0%2C3.969-0.823%2C7.736-2.248%2C11.208L411.687%2C290.175z%20M560.573%2C126.355%20%20%20%20%20c4.443%2C0%2C8.633%2C1.013%2C12.442%2C2.723l-267.01%2C221.378L38.995%2C129.078c3.81-1.709%2C8-2.723%2C12.442-2.723H560.573z%20M23.45%2C466.976%20%20%20%20%20c-1.425-3.461-2.248-7.239-2.248-11.208V156.232c0-4.39%2C1.024-8.538%2C2.754-12.294l176.368%2C146.238L23.45%2C466.976z%20%20%20%20%20%20M51.437%2C485.645c-4.896%2C0-9.456-1.267-13.55-3.313l178.731-178.658l82.58%2C68.471c1.963%2C1.636%2C4.39%2C2.459%2C6.807%2C2.459%20%20%20%20%20c2.417%2C0%2C4.844-0.823%2C6.807-2.459l82.58-68.471l178.731%2C178.658c-4.095%2C2.047-8.653%2C3.313-13.551%2C3.313H51.437z%22%20fill%3D%22%239aaeff%22/%3E%0A%09%09%3C/g%3E%0A%09%3C/g%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3C/svg%3E%0A) left center no-repeat;
    padding-left: 40px;
}
.password{
    padding-left: 40px;
    background: url(data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22iso-8859-1%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2019.0.0%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0A%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20version%3D%221.1%22%20id%3D%22Capa_1%22%20x%3D%220px%22%20y%3D%220px%22%20viewBox%3D%220%200%2054%2054%22%20style%3D%22enable-background%3Anew%200%200%2054%2054%3B%22%20xml%3Aspace%3D%22preserve%22%20width%3D%2225px%22%20height%3D%2225px%22%3E%0A%3Cg%3E%0A%09%3Cpath%20d%3D%22M43%2C20.113V14.5C43%2C6.505%2C35.822%2C0%2C27%2C0S11%2C6.505%2C11%2C14.5v5.613c-3.401%2C0.586-6%2C3.55-6%2C7.117v19.542%20%20%20C5%2C50.757%2C8.243%2C54%2C12.229%2C54h29.542C45.757%2C54%2C49%2C50.757%2C49%2C46.771V27.229C49%2C23.663%2C46.401%2C20.699%2C43%2C20.113z%20M13%2C14.5%20%20%20C13%2C7.607%2C19.28%2C2%2C27%2C2s14%2C5.607%2C14%2C12.5V20H13V14.5z%20M47%2C46.771C47%2C49.654%2C44.654%2C52%2C41.771%2C52H12.229C9.346%2C52%2C7%2C49.654%2C7%2C46.771%20%20%20V27.229C7%2C24.346%2C9.346%2C22%2C12.229%2C22h29.542C44.654%2C22%2C47%2C24.346%2C47%2C27.229V46.771z%22%20fill%3D%22%239aaeff%22/%3E%0A%09%3Cpath%20d%3D%22M27%2C28c-2.206%2C0-4%2C1.794-4%2C4v6c0%2C2.206%2C1.794%2C4%2C4%2C4s4-1.794%2C4-4v-6C31%2C29.794%2C29.206%2C28%2C27%2C28z%20M29%2C38c0%2C1.103-0.897%2C2-2%2C2%20%20%20s-2-0.897-2-2v-6c0-1.103%2C0.897-2%2C2-2s2%2C0.897%2C2%2C2V38z%22%20fill%3D%22%239aaeff%22/%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3Cg%3E%0A%3C/g%3E%0A%3C/svg%3E%0A) left center no-repeat;
    
}
/* .user{
    display: block;
    margin: 0 auto 50px;
} */
