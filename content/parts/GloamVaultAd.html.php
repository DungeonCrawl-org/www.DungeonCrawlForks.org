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
        // CHANGE THIS SELECTOR to match your banner
        const banner = document.querySelector(".floating-right-banner");

        if (!banner) return;

        // If previously hidden, keep it hidden permanently
        if (localStorage.getItem(STORAGE_KEY) === "true") {
            banner.remove();
            return;
        }

        // Find close button
        const closeBtn = banner.querySelector(".close-button");

        if (closeBtn) {
            closeBtn.addEventListener("click", function () {
                localStorage.setItem(STORAGE_KEY, "true");
                banner.remove();
            });
        }
    }

    // Run after DOM loads
    document.addEventListener("DOMContentLoaded", hideBanner);

    // Also retry in case banner is injected later
    setTimeout(hideBanner, 1000);
    setTimeout(hideBanner, 3000);
})();
</script>