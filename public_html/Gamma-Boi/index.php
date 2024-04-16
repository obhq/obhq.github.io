<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Obliteration</title>
    <meta name="description" content="Obliteration is an experimental open-source PS4 emulator written in Rust for Windows, MacOS, and Linux.">
    <meta name="keywords" content="Obliteration, playstation, ps4, playstation 4, emulator, windows, macOS, linux, open-source, rust, C++, obliteration github, obliteration discord, obliteration wiki">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Obliteration">
    <meta name="copyright" content="Obliteration">
    <meta name="theme-color" content="#680600">
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="Obliteration - An experimental open-source PS4 emulator"/>
    <meta name="twitter:description" content="Obliteration is an experimental open-source PS4 emulator written in Rust for Windows, macOS and Linux."/>
    <meta name="twitter:image:src" content="/_images/Obliteration.png"/>
    <meta property="og:title" content="Obliteration - An experimental open-source PS4 emulator">
    <meta property="og:description" content="Obliteration is an experimental open-source PS4 emulator written in Rust for Windows, macOS and Linux.">
    <meta property="og:image" content="/_images/Obliteration.png">
    <meta property="og:url" content="https://obliteration.net">
    <link rel="icon" href="/_images/Obliteration-smoll.png" type="image/png">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="/required.css">
    <link rel="stylesheet" href="./styles.css">
    <meta name="darkreader-lock"> <!-- for disabling dark mode with dark reader -->
    <script defer src="/required.js"></script>
    <script defer src="./app.js"></script>
</head>
<body>
<header class="header" id="header"></header>
<div class="menuContainer" id="menu"></div>
<main class="main">
    <div class="mainBackground">
        <div class="mainBackground1"></div>
        <div class="mainBackground2"></div>
    </div>
    <div class="mainContent">
        <p class="bigText mainText1">Welcome to
            <span class="bigText" style="color: #5c0504; text-shadow: 2px 2px 1px #b64045;">Obliteration  - WIP</span>
        </p>
        <p class="smollText mainText2">An Experimental
            <span class="smollText" style="color: #5c0504; text-shadow: 2px 2px 1px #b64045;">Playstation™ 4</span> emulator written in Rust for Windows, macOS and Linux!
        </p>
        <table class="mainTable">
            <tr>
                <?php
                $stats = json_decode(file_get_contents("G:\OBHQdb\stats\stats.json"), true);
                if ($stats) {
                    $stars = $stats["stars"];
                    $issues = $stats["issues"];
                    $devbuilds = $stats["devbuilds"];
                    echo "<td><p class='midText' style='color: #5c0504; text-shadow: 2px 2px 1px #b64045;'>$stars</p></td>";
                    echo "<td><p class='midText' style='color: #5c0504; text-shadow: 2px 2px 1px #b64045;'>$issues</p></td>";
                    echo "<td><p class='midText' style='color: #5c0504; text-shadow: 2px 2px 1px #b64045;'>$devbuilds</p></td>";
                } else {
                    echo "<td><p class='midText' style='color: #5c0504; text-shadow: 2px 2px 1px #b64045;'>N/A</p></td>";
                    echo "<td><p class='midText' style='color: #5c0504; text-shadow: 2px 2px 1px #b64045;'>N/A</p></td>";
                    echo "<td><p class='midText' style='color: #5c0504; text-shadow: 2px 2px 1px #b64045;'>N/A</p></td>";
                }
                ?>
            </tr>
            <tr>
                <td><p class="smollText">Stars on GitHub!</p></td>
                <td><p class="smollText">Tested Games!</p></td>
                <td><p class="smollText">Dev Builds!</p></td>
            </tr>
        </table>
        <div class="mainButtonContainer">
            <a class="mainButton" onclick="buttonScroll()">Learn More</a>
            <a class="mainButton" href="/download">Download</a>
        </div>
    </div>
</main>

<div class="main2" id="main2">
    <div class="main2Content">
        <img class="main2Image" src="https://github.com/obhq/obliteration/raw/main/screenshots.png" alt="Screenshot of Obliteration">
        <div class="main2Text">
            <p class="bigText">About
                <span class="bigText" style="color: #5c0504; text-shadow: 2px 2px 1px #b64045;">Obliteration</span></p>
            <menu style="margin-left: 1rem; margin-top: 2rem;">
                <li class="smollText">Made with
                    <span class="smollText" style="color: #5c0504; text-shadow: 2px 2px 1px #b64045;">Rust</span> for performance and safety.
                </li>
                <li class="smollText" style="margin-top: 1rem;">Supports Windows, macOS and Linux.</li>
                <li class="smollText" style="margin-top: 1rem;">Built-in FTP client to pull the firmware from a PS4.*</li>
                <li class="smollText" style="margin-top: 1rem;">Built-in GUI for managing your games.</li>
                <li class="smollText" style="margin-top: 1rem;">Built-in PKG extractor.</li>
                <li style="font-size: 0.8rem; font-weight: 800;margin-top: 1.5rem; list-style: none;"> * jailbroken ps4 required.</li>
            </menu>
        </div>
    </div>
</div>
</body>
</html>