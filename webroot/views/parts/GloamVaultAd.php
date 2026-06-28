<div class="ad-banner">
	<h4>This site is partially funded by the game GloamVault.</h4>
  <a href="https://store.steampowered.com/app/3460840/Gloamvault/?utm_source=dcss_site&utm_medium=referral&utm_campaign=dcss_site" target="_blank">
    <img src="/img/ads/gloamvault-lowerbanner.jpg" alt="Ad to GloamVault on Steam" loading="lazy">
  </a>
	<h4>Please visit their entry on Steam by clicking the image abouve to get them to increase their funding for this website.</h4>
</div>

<!-- Floating Banner Container -->
<div id="gloamvault-ad">
    <button id="gloamvault-close" type="button">✕</button>
	<h4>Website Sponsor</h4>
	<a href="https://store.steampowered.com/app/3460840/Gloamvault/?utm_source=dcss_site&utm_medium=referral&utm_campaign=dcss_site" target="_blank">
        <img src="/img/ads/gloamvault-rightbanner4.gif" alt="GloatVault image" title="This site is partially funded by the game GloamVault. Please visit their entry on Steam by clicking the image abouve to get them to increase their funding for this website.">
    </a>
	<h4>a game with DCSS sprites</h4>
</div>

<style>
#gloamvault-ad {
    position: fixed;

    right: 32px;
    top: 50%;
    transform: translateY(-50%);

    width: 160px;
    max-width: 160px;

    z-index: 9999;

    background: transparent;
    border: none;
    padding: 0;
}

#gloamvault-ad img {
    width: 100%;
    height: auto;
    display: block;
}

#gloamvault-close {
    position: absolute;
    top: 2px;
    right: 2px;

    width: 18px;
    height: 18px;

    font-size: 12px;
    line-height: 12px;

    cursor: pointer;
    z-index: 10000;
}</style>

<script>
(function () {
    const STORAGE_KEY = "hideGloamVaultAd";

    function initBanner() {
        const banner = document.getElementById("gloamvault-ad");
        const closeBtn = document.getElementById("gloamvault-close");

        if (!banner || !closeBtn) {
            return;
        }

        // Hide permanently if previously closed
        if (localStorage.getItem(STORAGE_KEY) === "true") {
            banner.style.display = "none";
            return;
        }

        closeBtn.onclick = function (e) {
            e.preventDefault();
            e.stopPropagation();

            banner.style.display = "none";

            localStorage.setItem(STORAGE_KEY, "true");

            return false;
        };
    }

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initBanner);
    } else {
        initBanner();
    }
})();
</script>