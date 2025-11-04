@props(['title' => 'Login'])

<!DOCTYPE html>
<html lang="{{ str_Replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} | {{ config('app.name', 'Azriel') }}</title>
    <link rel="stylesheet" href="/css/login.css" />
    <link rel="icon" href="/IMG/Logo.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container">
        <img src="IMG/Logo Text.png" alt="" />
        <div class="login-box">
            <form action="" method="post">
                <div class="input-group">
                    <label for="username"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="24" height="24" fill="url(#pattern0_2338_45)" />
                            <defs>
                                <pattern id="pattern0_2338_45" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_2338_45" transform="scale(0.0078125)" />
                                </pattern>
                                <image id="image0_2338_45" width="128" height="128" preserveAspectRatio="none"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </label>
                    <input type="text" id="username" name="username" required placeholder="Username" />
                </div>
                <div class="input-group">
                    <label for="password"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="24" height="24" fill="url(#pattern0_2338_46)" />
                            <defs>
                                <pattern id="pattern0_2338_46" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_2338_46" transform="scale(0.0078125)" />
                                </pattern>
                                <image id="image0_2338_46" width="128" height="128" preserveAspectRatio="none"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                    </label>
                    <input type="password" id="password" name="password" required placeholder="Password" />
                </div>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
