// Twitter Intent Api: -  `https://twitter.com/intent/tweet?text=`; 

function copyUrl() {
    var copyUrls = document.getElementById("urlCopy");
    navigator.clipboard.writeText(copyUrls);
}

function shareOnTwitter() {
    const urls = document.getElementById("urlCopy")
    const navUrl =
        'https://twitter.com/intent/tweet?text=' + urls;
        
    window.open(navUrl, '_blank');
}
const tweet = document.getElementById('twitter');
tweet.addEventListener('click', shareOnTwitter);