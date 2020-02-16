<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập nào !</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="{{ asset('asset/css/login.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="darkBg">
    <audio autoplay loop>
        <source src="{{ asset('mp3/TraSua-QuytNho-5298123.mp3') }}" >
    </audio>
    <div class="center">
        <div class="ear ear--left"></div>
        <div class="ear ear--right"></div>
        <div class="face">
            <div class="eyes">
                <div class="eye eye--left">
                    <div class="glow"></div>
                </div>
                <div class="eye eye--right">
                    <div class="glow"></div>
                </div>
            </div>
            <div class="nose"><svg width="38.161" height="22.03">
                    <path
                        d="M2.017 10.987Q-.563 7.513.157 4.754C.877 1.994 2.976.135 6.164.093 16.4-.04 22.293-.022 32.048.093c3.501.042 5.48 2.081 6.02 4.661q.54 2.579-2.051 6.233-8.612 10.979-16.664 11.043-8.053.063-17.336-11.043z"
                        fill="#243946"></path>
                </svg>
                <div class="glow"></div>
            </div>
            <div class="mouth"><svg class="smile" viewBox="-2 -2 84 23" width="84" height="23">
                    <path d="M0 0c3.76 9.279 9.69 18.98 26.712 19.238 17.022.258 10.72.258 28 0S75.959 9.182 79.987.161"
                        fill="none" stroke-width="3" stroke-linecap="square" stroke-miterlimit="3"></path>
                </svg>
                <div class="mouth-hole"></div>
                <div class="tongue breath">
                    <div class="tongue-top"></div>
                    <div class="line"></div>
                    <div class="median"></div>
                </div>
            </div>
        </div>
        <div class="hands">
            <div class="hand hand--left">
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
            </div>
            <div class="hand hand--right">
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
                <div class="finger">
                    <div class="bone"></div>
                    <div class="nail"></div>
                </div>
            </div>
        </div>
        <form action="{{ route('post-login') }}" method="post">
        <div class="login">
                @csrf
            <label>
                <div class="fa fa-phone">
                    </div>
                    <input name="phone" class="username" type="text" autocomplete="off"
                    placeholder="Số điện thoại" />
            </label>
            <label>
                <div class="fa fa-commenting">
                    </div>
                    <input name="password" class="password" type="password" autocomplete="off"
                    placeholder="Mật khẩu" />
                <button type="button" class="password-button">
                    <i style="top:25%" class="fa fa-heart" aria-hidden="true"></i>
                </button>
            </label>
            <button type="submit" class="login-button">Đăng nhập</button>
        </div>
    </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
    <script src="{{ asset('asset/js/login.js') }}"></script>

</body>

</html>

