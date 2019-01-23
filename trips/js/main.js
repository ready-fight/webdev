var citiesChecked = [];

$(".form-check-input").change(function () {
  var checkedCity = $(this).next("label").text();
  if (this.checked) {
    citiesChecked.push(checkedCity);
    $("#checkedCities").text(citiesChecked.toString().replace(/\,/g, ', '));
  } else {
    var removeCity = citiesChecked.indexOf(checkedCity);
    citiesChecked.splice(removeCity, 1);
    $("#checkedCities").text(citiesChecked.toString().replace(/\,/g, ', '));
  }
});


var btn = $('#top-button');
var applyBtn = $('#apply-button');
var character = $('#character');

if ($(window).width() > 767) {
  character.addClass('show');
}

$(window).resize(function () {
  if ($(window).height() == $(document).height() || $(window).scrollTop() + $(window).height() != $(document).height()) {
    btn.removeClass('show');
    applyBtn.removeClass('show');

    if ($(window).width() > 767) {
      character.addClass('show');
    } else {
      character.removeClass('show');
    }

    if ($(window).height() < 470) {
      character.removeClass('show');
    }

  } else if ($(window).scrollTop() + $(window).height() == $(document).height()) {
    btn.addClass('show');
    applyBtn.addClass('show');
    character.addClass('show');
  }
});

$(window).scroll(function () {
  if ($(window).scrollTop() + $(window).height() == $(document).height()) {
    btn.addClass('show');
    applyBtn.addClass('show');
    character.addClass('show');
  } else {
    btn.removeClass('show');
    applyBtn.removeClass('show');
    if ($(window).width() > 767) {
      character.addClass('show');
    } else {
      character.removeClass('show');
    }

    if ($(window).height() < 470) {
      character.removeClass('show');
    }
  }
});

applyBtn.on('click', function () {
  window.open("oubo.html",
    "targetWindow", "toolbar=no, location=no, status=no, menubar=no, resizable=no, width=350, height=250");
  return false;
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop: 0
  }, '300');
});

function searchResults() {
  $.post("search.php", {
      cities: citiesChecked
    })
    .done(function (response) {
      $('#searchResults').html(response);
    });
}
