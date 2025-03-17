<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* From Uiverse.io by SyedShahzaib7 */
    .wrapper {
        width: 420px;
        background: rgb(2, 0, 36);
        background: linear-gradient(90deg,
                rgba(2, 0, 36, 1) 9%,
                rgba(9, 9, 121, 1) 68%,
                rgba(0, 91, 255, 1) 97%);
        backdrop-filter: blur(9px);
        color: #fff;
        border-radius: 12px;
        padding: 30px 40px;
        padding-right: 90px;

    }

    .form-login {
        font-size: 66px;
        text-align: center;
    }

    .wrapper .input-box {
        position: relative;
        width: 100%;
        height: 50px;
        margin: 30px 0;
        margin-bottom: 50px
    }

    .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 40px;
        font-size: 16px;
        color: #fff;
        padding: 20px 45px 20px 20px;

    }

    .input-box input::placeholder {
        color: #fff;
    }

    .wrapper .remember-forgot {
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: -15px 0 15px;
        margin-bottom: 50px
    }

    .remember-forgot label input {
        accent-color: #fff;
        margin-right: 3px;
        margin-top: 50px
    }

    .remember-forgot a {
        color: #fff;
        text-decoration: none;
        margin-top: 50px
    }

    .remember-forgot a:hover {
        text-decoration: underline;
        margin-top: 50px
    }

    .wrapper .btn {
        width: 250px;
        height: 65px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        font-size: 16px;
        color: #333;
        font-weight: 600;
        margin-left: 90px;
        margin-top: 10px;
        margin-bottom: 50px
    }

    .wrapper .register-link {
        font-size: 14.5px;
        text-align: center;
        margin: 20px 0 15px;
        margin-bottom: 50px
    }

    .register-link p a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        margin-bottom: 50px
    }

    .register-link p a:hover {
        text-decoration: underline;
    }
</style>

<body
    style="        background: linear-gradient(90deg,

                rgba(2, 0, 36, 1) 97%,rgba(2, 0, 36, 1) 97%,rgba(2, 0, 36, 1) 97%);">
    <center>
        <div class="wrapper">
            <form method="POST" action="{{ route('admin.register') }}">
                @csrf
                <p class="form-login">Register</p>
                <div class="input-box">
                    <input required placeholder="Name" type="text" name="name" autofocus autocomplete="name" />
                </div>
                <div class="input-box">
                    <input required placeholder="Email" type="email" name="email" autofocus autocomplete="email" />
                </div>
                <div class="input-box">
                    <input required name="password" placeholder="Password" type="password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="input-box">
                    <input required name="password_confirmation" placeholder="Password" type="password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" />Remember Me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button class="btn" type="submit">Register</button>
                <div class="register-link">
                    <p>Dont have an account? <a href="#">Login</a></p>
                </div>
            </form>
        </div>
    </center>
</body>

</html>
