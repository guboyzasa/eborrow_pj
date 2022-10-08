<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ECP - สาขาวิศวกรรมคอมพิวเตอร์</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            background-image: url('/img/bg.jpg');
            /* background-size: 100% 107%; */
            background-position: center;
            background-repeat: no-repeat;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            /* width:100%;
                height:auto; */
            margin: 0;
        }

        /* img {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%); /* IE 9 */
        -webkit-transform: translate(-50%, -50%);
        /* Chrome, Safari, Opera */
        }

        */
        /* .full-height {
                height: 100vh;
            } */

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

        .links>a {
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



        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: Right;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .responsive {
            width: 100%;
            height: auto;
            display: block;
            margin: auto;

        }

        @media only screen and (max-width: 600px) {
            .visibledevice {
                margin-top: 45%;
            }
        }
    </style>
</head>

<body>
    <div class="topnav">

        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <span class="pull-right">
                <a href=" {{ route('select-login') }}" class="btn bg-info text-white"> Login </a>
            </span>
            <div>
                <img class="align-middle" src="/img/rmuti.png" alt="" width="170px">
            </div>
        @endauth

    </div>

    <div class="container">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-10">
                <div class="card bg-white text-center" style="border-radius:30px;margin-top:250px;opacity: 0.8">
                    <div class="card-body">
                        <h1 class="card-text" style="font-size:3vw;color: black">
                            <strong>ระบบบริหารจัดการวัสดุและครุภัณฑ์</strong>
                        </h1>
                        <p class="card-text" style="font-size:3vw;color: black">สาขาวิชาวิศวกรรมคอมพิวเตอร์</p>
                    </div>
                </div>
            </div>
            <div class="col-1">
            </div>
        </div>
    </div>





</body>

</html>
