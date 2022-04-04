@extends('index')

@section('login')
    <div id="id01" class="modal">
        <form class="modal-content animate" autocomplete="off" action="{{ route('login') }}" method="post">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="assets/img/logo-jpt1.png" alt="Logo" class="avatar mb-3">
            </div>
            <div class="container">
                <div class="clue"><b>Welcome to Jasa Marga Pandaan</b></div>
                <br><b class="clue subclue">Mohon lakukan Log-In untuk melakukan administrasi</b>
            </div>
            <div class="container">
                <br>
                <label for="uname" class="clue subclue"><b> E-mail Address</b></label>
                <input type="text" placeholder="Enter E-mail Address" class="form-control" id="email" name="email" required>
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>

                <label for="psw" class="clue subclue"><b>Password</b></label>
                <input id="password" type="password" class="form-control" name="password" required data-eye
                    placeholder="Enter password">
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
                <label class="clue subclue mb-2">
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <button type="submit" class="btnlogin mb-3" onclick="lsRememberMe()">Login</button>
            </div>
        </form>
    </div>
    <script src="../../../assets/js/login.js"> </script>
@endsection
