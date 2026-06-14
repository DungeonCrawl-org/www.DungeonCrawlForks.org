<div class="ad-banner">
	<h4>This site is partially funded by the game GloamVault.</h4>
  <a href="https://store.steampowered.com/app/3460840/Gloamvault/?utm_source=dcss_site&utm_medium=referral&utm_campaign=dcss_site" target="_blank">
    <img src="/img/ads/gloamvault-lowerbanner.jpg" alt="Ad to GloamVault on Steam" loading="lazy">
  </a>
	<h4>Please visit their entry on Steam by clicking the image abouve to get them to increase their funding for this website.</h4>
</div>

<!-- Floating Banner Container -->
<div class="floating-banner">
	<h4>Website Sponsor</h4>
	<a href="https://store.steampowered.com/app/3460840/Gloamvault/?utm_source=dcss_site&utm_medium=referral&utm_campaign=dcss_site" target="_blank">
        <img src="/img/ads/gloamvault-rightbanner4.gif" alt="GloatVault image" title="This site is partially funded by the game GloamVault. Please visit their entry on Steam by clicking the image above to get them to increase their funding for this website.">
    </a>
	<h4>a game with DCSS sprites</h4>
    <!-- Optional Close Button -->
    <button id="close-banner" onclick="this.parentElement.style.display='none'" class="close-btn">&times;</button>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("floating-banner");
    const closeBtn = document.getElementById("close-banner");

    // Permanently hide if user already dismissed it
    if (localStorage.getItem("hideFloatingBanner") === "true") {
        banner.style.display = "none";
    }

    // Save preference when closed
    closeBtn.addEventListener("click", function () {
        banner.style.display = "none";
        localStorage.setItem("hideFloatingBanner", "true");
    });
});
</script>