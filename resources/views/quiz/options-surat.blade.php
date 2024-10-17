<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajeg-nderes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/logo/logo.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <style>
        body {
            background: rgb(75, 112, 155);
            background: linear-gradient(90deg, rgba(75, 112, 155, 1) 0%, rgba(248, 249, 250, 1) 51%);
        }

        .card-custom {
            border-radius: 15px;
            background-color: #4b709b;
            color: white;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* display: flex; */
            align-items: center;
            /* justify-content: space-between; */
        }

        .card-custom h5 {
            margin-bottom: 15px;
            font-size: 1.25rem;
            font-weight: 700;
        }

        .icon {
            font-size: 3rem;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 50%;
        }

        .arrow-icon {
            color: #dc3545;
            font-size: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center my-5">
            <svg width="128px" height="128px" viewBox="0 0 48 48" id="a" xmlns="http://www.w3.org/2000/svg"
                fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <defs>
                        <style>
                            .b {
                                fill: none;
                                stroke: #4b709b;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                            }
                        </style>
                    </defs>
                    <path class="b"
                        d="m23.2243,13.5421c2.4953-2.8598,4.7664-5.1308,3.7009-6.2804s-18.3123,5.2534-17.3389,6.9252c.5801.9963,15.9886,12.1786,17.5083,13.0778,1.7856,1.0565,4.6529-.1806,4.4006-2.1432s-2.3271-18.0117-2.3271-18.0117c0,0,1.1776,1.5818,1.5421,2.6752">
                    </path>
                    <path class="b"
                        d="m35.0841,26.507c-.2523-1.9626-2.3271-18.0117-2.3271-18.0117,0,0,1.1776,1.5818,1.5421,2.6752">
                    </path>
                    <path class="b"
                        d="m28.3832,33.8692c0-6.2176-2.0893-20.0105-2.0893-20.0105,0,0,1.1776,1.5818,1.5421,2.6752">
                    </path>
                    <path class="b"
                        d="m22.0709,14.5467c-.3645-1.0935-1.5421-2.6752-1.5421-2.6752,0,0,.5927,7.208,4.0413,8.6379-9.2464-4.479-13.6472,10.1776-17.6425,5.8879-2.8507-3.0608,2.271-7.3598,2.271-7.3598">
                    </path>
                    <path class="b"
                        d="m37.9159,14.0304c-.3645-1.0935-1.5421-2.6752-1.5421-2.6752,0,0,2.0262,17.895,2.4579,22.514.2057,2.2009-3.8738,3.2103-5.3878-.4907s-.1262-4.7523.7991-4.7523,2.4393,3.0841,0,4.514-6.5047,2.4673-7.7383,3.8972-3.3925,4.7103-4.8224,4.7103-4.2336-1.5421-1.0374-7.8785">
                    </path>
                    <path class="b"
                        d="m41.4486,31.1495c-.2523-3.2804-1.9626-16.5701-1.9626-16.5701,0,0,1.1776,1.5818,1.5421,2.6752">
                    </path>
                    <path class="b" d="m13.993,8.9439c1.7243-1.0724,5.278-1.7453,7.1285-3.1963"></path>
                    <path class="b"
                        d="m8.9813,27.1933c-2.2991,2.5263-1.6542,7.6572,1.0374,6.8161,1.0051-.3141,2.2153-2.4048,4.2336-3.3084,3.3866-1.5162,7.7185-2.2894,7.4579-4.7103-.3364-3.1262-3.3365-4.9446-3.3365-4.9446">
                    </path>
                    <path class="b"
                        d="m25.8178,29.0187c-1.4369-.6343-1.9065-1.3672-1.9065-1.3672,1.1636,2.6008,2.0607,4.1849,2.0888,5.4326s-6.4065,5.236-9.1682,5.236c-3.2173,0-5.5707-2.3117-4.6569-6.15">
                    </path>
                    <path class="b" d="m10.1351,14.7347c-2.1141.9802-3.4251,5.6169-1.8128,5.149"></path>
                    <circle class="b" cx="24" cy="24" r="21.5"></circle>
                </g>
            </svg>
        </div>

        <div class="row text-center">
            @foreach ($surahs as $surah)
                <div class="col-md-3 mb-4">
                    <a style="color:inherit; text-decoration:inherit;" href="https://quran.kemenag.go.id/"
                        target="_blank">
                        <div class="card-custom">
                            {{-- <div class="d-flex align-items-center"> --}}
                                {{-- <div class="">
                                <h3 class="arab">{{ $surah['name']['short'] }}</h3>
                            </div> --}}
                                <div class="d-flex justify-content-between">
                                    {{-- <div class="surah-number">{{ $surah['number'] }}</div> --}}
                                    <div>
                                        <div class="surah-name">{{ $surah['name']['transliteration']['id'] }}</div>
                                        <div class="surah-info">{{ $surah['revelation']['id'] }} • {{ $surah['numberOfVerses'] }} Ayat</div>
                                    </div>
                                    <div class="arab">{{ $surah['name']['short'] }}</div>
                                </div>
                            {{-- </div> --}}
                            <div>
                                <i class="bi bi-arrow-right arrow-icon"></i>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="text-center my-5">
            <p>Powered By <span class="fw-bold">Geocircle Indonesia</span></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
