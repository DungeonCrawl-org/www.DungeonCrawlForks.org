<div class="ad-banner">
	<h4>This site is partially funded by the game GloamVault.</h4>
  <a href="https://store.steampowered.com/app/3460840/Gloamvault/?utm_source=dcss_site&utm_medium=referral&utm_campaign=dcss_site" target="_blank">
    <img src="/img/ads/gloamvault-lowerbanner.jpg" alt="Ad to GloamVault on Steam" loading="lazy">
  </a>
	<h4>Please visit their entry on Steam by clicking the image abouve to get them to increase their funding for this website.</h4>
</div>

<!-- Floating Banner Container -->
<div class="floating-banner">
    <button id="close-banner">✕</button>
    <h4>Website Sponsor</h4>
	  <a href="https://store.steampowered.com/app/3460840/Gloamvault/?utm_source=dcss_site&utm_medium=referral&utm_campaign=dcss_site" target="_blank">
        <img src="/img/ads/gloamvault-rightbanner4.gif" alt="GloatVault image" title="This site is partially funded by the game GloamVault. Please visit their entry on Steam by clicking the image above to get them to increase their funding for this website.">
    </a>
	  <h4>a game with DCSS sprites</h4>
</div>

 <script>
    (function () {
        const STORAGE_KEY = "hideFloatingRightBanner";

        function hideBanner() {
            const banner = document.querySelector("#right-banner");

            if (!banner) return;

            if (localStorage.getItem(STORAGE_KEY) === "true") {
                banner.remove();
                return;
            }

            const closeBtn = banner.querySelector(".banner-close");

            if (closeBtn) {
                closeBtn.addEventListener("click", function () {
                    localStorage.setItem(STORAGE_KEY, "true");
                    banner.remove();
                });
            }
        }

        document.addEventListener("DOMContentLoaded", hideBanner);

        setTimeout(hideBanner, 1000);
    })();
    </script>
