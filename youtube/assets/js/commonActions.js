var profile;

$(document).ready(function () {
  profile = $("#profile");

  $(".navShowHide").on("click", function () {
    var main = $("#mainSectionContainer");
    var nav = $("#sideNavContainer");

    if (main.hasClass("leftPadding")) {
      nav.hide();
    } else {
      nav.show();
    }

    main.toggleClass("leftPadding");
  });
});

$(document).mouseup(function (e) {
  if (!profile.is(e.target) && profile.has(e.target).length === 0) {
    profile.css("visibility", "hidden");
  }
});

function showProfile() {
  profile.css("visibility", "visible");
}
