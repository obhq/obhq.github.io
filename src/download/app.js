document.addEventListener('DOMContentLoaded', async function () {

    // required.js
    adjustScreenSize(610); // might not change the top image for on mobile
    await init();
    adjustScreenSize(610); // ensure change of top image
    headerShadow();

    window.addEventListener('resize', () => {
        adjustScreenSize(570);
    });
    window.addEventListener("scroll", headerShadow);
    
    // add the button events
    document.querySelectorAll(".downloadListItem").forEach((item) => {
        item.addEventListener('click', function() {

            if (item === document.querySelector(".downloadList").children.item(0)) {
                document.querySelector(".downloadContentList").style.transform = `translateX(0)`; // could just leave it empty but this makes it look nicer in inspect element :D

            } else if (item === document.querySelector(".downloadList").children.item(1)) {
                document.querySelector(".downloadContentList").style.transform = `translateX(-100%)`;

            } else if (item === document.querySelector(".downloadList").children.item(2)) {
                document.querySelector(".downloadContentList").style.transform = `translateX(-200%)`;

            } else {
                console.error("Uh oh, it seems the html is modified!");
            }

            document.querySelector(".downloadListItemSelected").classList.remove("downloadListItemSelected");
            item.classList.add("downloadListItemSelected");
        })
    });

    await fetch('/stats.json').then(response => response.json()).then(jsonData => {

        document.getElementById("githubBuildNumber").textContent =  "#" +  jsonData.devbuilds;
        document.getElementById("githubBuildNumber").href = jsonData.build_link;
        
        document.getElementById("githubBuildDate").textContent = new Date(jsonData.build_date).toLocaleDateString();
        document.getElementById("githubBuildDate").href = jsonData.build_link;

        document.getElementById("githubUserContainer").href = "https://github.com/" +  jsonData.commiter_name
        document.getElementById("githubAvatar").src = jsonData.commiter_avatar;
        document.getElementById("githubUsername").textContent = jsonData.commiter_name;
        
        setTimeout(function() {
            document.getElementById("infoContainer").classList.remove("skeletonLoading")
            document.querySelectorAll(".infoSub").forEach(( element) => element.style.opacity = "1");
        }, 200);
    });
});

    