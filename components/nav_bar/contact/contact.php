<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .container .left-side {
            width: 25%;
            /* height: 100%; */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            position: relative;
        }

        .left-side .details {
            margin: 16px;
            text-align: center;
        }

        .left-side .details i {
            font-size: 30px;
            color: #0d6efd;
            margin-bottom: 10px;
        }

        .left-side .details .topic {
            font-size: 18px;
            font-weight: 500;
        }

        .left-side .details .text-detail {
            font-size: 16px;
            color: #afafb6;
        }

        .container .right-side {
            width: 75%;
            margin-top: 20px;
            margin-left: 75px;
        }

        .right-side .topic-text {
            font-size: 30px;
            font-weight: 600;
        }

        .right-side .input-box {
            height: 50px;
            margin: 12px 0;
        }

        .right-side .input-box input,
        .right-side .input-box textarea {
            height: 100%;
            width: 100%;
            border: none;
            outline: none;
            font-size: 16px;
            background: #f0f1f8;
            border-radius: 6px;
            padding: 0 15px;
            resize: none;
        }

        .right-side .input-box textarea {
            padding-top: 6px;
        }

        /* @media (max-width: 950px) {
            .container {
                width: 90%;
                padding: 30px 40px 40px 35px;
            }

            .container .right-side {
                width: 75%;
                margin-left: 55px;
            }
        }

        @media (max-width: 820px) {
            .container {
                margin: 40px 0;
                height: 100%;
            }

            .container .left-side {
                width: 100%;
                flex-direction: row;
                margin-top: 40px;
                justify-content: center;
                flex-wrap: wrap;
            }

            .container .left-side::before {
                display: none;
            }

            .container .right-side {
                width: 100%;
                margin-left: 0;
            }
        } */
    </style>
</head>

<body>
    <div class="container" style="padding: 80px 40px 80px 40px">
        <div class="d-flex align-items-center justify-content-between">
            <div class="left-side">
                <div class="details">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <div class="topic">Address</div>
                    <div class="text-detail">27/8 Nguyen Binh Khiem</div>
                    <div class="text-detail">Go Vap, TP.HCM</div>
                </div>
                <div class="details">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div class="topic">Phone</div>
                    <div class="text-detail">(+84) 973148620</div>
                </div>
                <div class="details">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <div class="topic">Email</div>
                    <div class="text-detail">tam.nguyen2702@hcmut.edu.vn</div>
                </div>
            </div>

            <div class="right-side" style="line-height:30px;">
                <div class="topic-text text-primary">Send me a message</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras convallis felis vel dui porttitor porttitor.
                    Nulla nec nibh nulla. Proin non varius arcu. Sed volutpat semper dictum.
                    Quisque scelerisque nibh imperdiet, convallis felis rhoncus, pellentesque nulla. Donec ac mollis diam, ut cursus arcu.
                    Etiam eros sapien, fringilla vitae varius eget, cursus eu odio.
                </p>
                <form action="#">
                    <div class="input-box">
                        <input type="name" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="input-box">
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="input-box" style="min-height: 110px;">
                        <input type="text" class="form-control" placeholder="Enter your message">
                    </div>
                    <div style="margin-top: 12px;">
                        <button type="button" class="btn btn-outline-primary" style="font-size: 18px;">Send Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>