
<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Lorem ipsum dolor sit amet</p>
			<label id="label-login" for="log-login-show">Signup</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>

<div class="register-show">

				<h2>SIGNUP</h2>
                <form action="\stored" method="POST" name="signup">@csrf
				<input type="text" placeholder="Email" name="email">
                @error('email')
                <div>{{$message}}</div>@enderror
				<input type="password" placeholder="Password" name="password">
                @error('password')
                <div>{{$message}}</div>@enderror
				<input type="password" placeholder="Confirm Password" name="confirmpassword">
                @error('confirmpassword')
                <div>{{$message}}</div>@enderror
				<input type="button" value="Signup" name="submit">
			</div>
            </form>
		</div>