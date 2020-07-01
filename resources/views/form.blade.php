<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <h2>Buat Account Baru!</h2>

        <h4>Sign Up Form</h4>
        <form action="welcome.html">
            <label>First name : </label><br/>
            <input type="text" id="nme" name="nme"/><br/>
            <label>Last name : </label><br>
            <input type="text" id="lastnme" name="lastnme"/><br/>
            <br/>
            <label>Gender : </label><br/>
            <input type="radio" id="male" name="gender" value="male"/>
            <label>Male</label> <br/>
            <input type="radio" id="female" name="gender" value="female"/>
            <label>Female</label> <br/>
            <input type="radio" id="other" name="gender" value="other"/>
            <label>Other</label><br/>
            <br/>
            <label>Nationality : </label><br/><br/>
            <select name="nationality" id="nationality">
                <option value ="indonesian">Indonesian</option>
                <option value ="english">English</option>
                <option value ="japan">Japan</option>
            </select> 
            <br/>
            <br/>
            <label>Language Spoken : </label><br/>
            <input type="checkbox" id="idn" name="language" value="Indonesian"/>
            <label>Indonesian</label> <br/>
            <input type="checkbox" id="english" name="language" value="English"/>
            <label>English</label> <br/>
            <input type="checkbox" id="other" name="language" value="Other"/>
            <label>Other</label> <br/>
            <br/>
            <label>Bio : </label><br/>
            <textarea id="bio" name="bio" rows="8" cols="25">
            </textarea>
            <br/>
        
            <br/>
            <input type="submit" name="submit" value="Sign Up"/>

        </form>
    </body>    
</html>
