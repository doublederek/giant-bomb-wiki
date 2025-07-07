document.querySelectorAll(".wiki-btn").forEach(function (btn) {
  btn.addEventListener("click", function () {
    const title = this.getAttribute("data-title");
    if (title === "Home") {
      window.location.reload();
      return;
    }
    fetch(
      `/skins/GiantBomb/includes/partials/results.php?title=${encodeURIComponent(
        title,
      )}`,
    )
      .then((response) => response.text())
      .then((html) => {
        document.getElementById("dynamic-content").innerHTML = html;
      });
  });
});
