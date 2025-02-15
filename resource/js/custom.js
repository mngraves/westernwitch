/**
 * Custom JS for theme elements
 */

/**
 * Wocommerce active class for category list
 */
let lotuWellaurl = window.location.href;
const lotuWellacatLink = document.querySelectorAll(
  ".wc-block-product-categories-list li a"
);
lotuWellacatLink.forEach((item) => {
  if (item.href === lotuWellaurl) {
    item.classList.add("active");
  }
});

/*
    Add class in body when search clicked
*/
let lotuWellasearchBtn = document.querySelector(".search-controller svg.search");

if (lotuWellasearchBtn !== null) {
  lotuWellasearchBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");
    document.body.classList.add("open-search");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-search");
    });

    let lotuWellasearchContainer = document.querySelector(".search-container");
    lotuWellasearchContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var lotuWellasearchInput = document.querySelector(".wp-block-search__input");
    window.setTimeout(() => lotuWellasearchInput.focus(), 0);
  });
}

var lotuWellasearchBtnClose = document.querySelector(
  ".search-controller svg.cross"
);

if (lotuWellasearchBtnClose !== null) {
  lotuWellasearchBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");

  });
}


/*
    Add class in body when social clicked
*/
let lotuWellasocialBtn = document.querySelector(".social-controller svg.social");

if (lotuWellasocialBtn !== null) {
  lotuWellasocialBtn.addEventListener("click", function (e) {
    document.body.classList.remove("open-search");
    document.body.classList.add("open-social");
    document.body.addEventListener("click", function () {
      document.body.classList.remove("open-social");
    });

    let lotuWellasocialContainer = document.querySelector(".social-container");
    lotuWellasocialContainer.addEventListener("click", function (e) {
      e.stopPropagation();
    });

    var lotuWellasocialInput = document.querySelector(".wp-block-social__input");
    window.setTimeout(() => lotuWellasocialInput.focus(), 0);
  });
}

var lotuWellasocialBtnClose = document.querySelector(
  ".social-controller svg.cross"
);

if (lotuWellasocialBtnClose !== null) {
  lotuWellasocialBtnClose.addEventListener("click", function (e) {
    document.body.classList.remove("open-social");

  });
}

/*
    Add blinker on input field when active
*/
let lotuWellablinkerField = document.querySelector(".social-controller svg.search");

if (lotuWellablinkerField !== null) {
  lotuWellablinkerField.addEventListener("click", function () {
    var lotuWellasearchInput = document.querySelector(".wp-block-search__input");
        window.setTimeout(() => lotuWellasearchInput.focus(), 0);
  });
}