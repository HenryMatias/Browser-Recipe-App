document.getElementById("todesktop").addEventListener("click", desktopSize);
    function desktopSize() {
        document.getElementById("devicescale").classList.remove("tablet-device");
    };

document.getElementById("totablet").addEventListener("click", tabletSize);
    function tabletSize() {
        document.getElementById("devicescale").classList.add("tablet-device");
    };


    

                