document.querySelectorAll(".banner").forEach(function (banner) {
  banner.querySelectorAll(".banner__close").forEach(function (close) {
    close.addEventListener("click", function () {
      banner.classList.remove("active");
      document.querySelector(".header").classList.add("hide-banner");
    });
  });
});

document.querySelectorAll(".mheader").forEach(function (header) {
  header
    .querySelectorAll(".menu .navigation .menu-list > .menu-item:nth-child(1)")
    .forEach(function (item) {
      item.classList.add("active");
    });
  header
    .querySelectorAll(".menu .navigation .menu-list .menu-item-has-children")
    .forEach(function (item) {
      item.addEventListener("click", function (e) {
        if (e.target.parentNode.classList.contains("menu-item-has-children")) {
          e.preventDefault();
        }
        document
          .querySelectorAll(
            ".mheader .menu .navigation .menu-list > .menu-item"
          )
          .forEach(function (item) {
            item.classList.remove("active");
          });
        item.classList.add("active");
      });
    });
  header.querySelectorAll(".burger").forEach(function (burger) {
    burger.addEventListener("click", function () {
      const menu = document.querySelector(".mheader__menu .menu");
      menu && menu.classList.toggle("active");
      document.body.classList.toggle("mobile-overflow-hidden");

      document.querySelector("#masthead").classList.remove("hide-navigation");
      document
        .querySelector("#masthead")
        .classList.remove("hide-mobile-primary-button");
      document
        .querySelectorAll(".site-header .search-input")
        .forEach((input) => {
          input.classList.remove("active");
        });
      document
        .querySelectorAll("#masthead .search-input__entry")
        .forEach((entry) => {
          entry.classList.remove("active-input");
          entry.value = "";
        });

      document
        .querySelectorAll(".search-input__inner.results-visible")
        .forEach((wrapper) => wrapper.classList.remove("results-visible"));

      document.querySelectorAll("#searchResults").forEach((results) => {
        results.classList.remove("results-visible");
        results.innerHTML = "";
      });

      document
        .querySelectorAll("#masthead .search-input__button .clear-search-icon")
        .forEach((icon) => {
          icon.classList.remove("clear-active");
        });

      document.querySelectorAll(".search-input__button svg").forEach((svg) => {
        svg.style.display = "block";
      });
    });
  });
});

document.querySelectorAll(".lheader").forEach(function (lheader) {
  const menu = lheader.querySelector(".navigation__nested-menu");
  const open = lheader.querySelector(".open-menu.menu-item");
  if (!menu || !open) return;
  open.addEventListener("mouseenter", function () {
    menu.classList.add("active");
  });
  open.addEventListener("mouseout", function () {
    menu.classList.remove("active");
  });
  lheader.querySelectorAll(".nested-menu").forEach(function (nested) {
    nested.addEventListener("mouseover", function () {
      open.classList.add("hovered");
      open.parentNode.closest(".menu-item").classList.add("hovered");
      nested.classList.add("active");
    });
    nested.addEventListener("mouseout", function () {
      open.classList.remove("hovered");
      open.parentNode.closest(".menu-item").classList.remove("hovered");
      nested.classList.remove("active");
    });
  });
});

document.querySelectorAll(".country-picker").forEach(function (picker) {
  const triger = picker.querySelector(".country-picker__inner");
  triger &&
    triger.addEventListener("click", function () {
      if (!picker.classList.contains("blured")) {
        this.parentNode.classList.toggle("active");
        this.parentNode.focus();
      }
    });
  picker.addEventListener("blur", function () {
    this.classList.remove("active");
    this.classList.add("blured");
    setTimeout(() => {
      this.classList.remove("blured");
    }, 200);
  });
});

document.querySelectorAll(".language-picker").forEach(function (picker) {
  const triget = picker.querySelector(".language-picker__inner");
  triget &&
    triget.addEventListener("click", function () {
      if (!picker.classList.contains("blured")) {
        this.parentNode.classList.toggle("active");
        this.parentNode.focus();
      }
    });
  picker.addEventListener("blur", function () {
    this.classList.remove("active");
    this.classList.add("blured");
    setTimeout(() => {
      this.classList.remove("blured");
    }, 200);
  });
});

const headerSearchFormInputs = [
  document.querySelector(".lheader .search-input"),
  document.querySelector(".mob_search_1 .search-input"),
  document.querySelector(".mob_search_2 .search-input"),
];
// document.querySelectorAll('.search-input')
headerSearchFormInputs.forEach(function (searchInput) {
  const id = searchInput.dataset.id;
  const open = searchInput.querySelector(".search-input__open");
  const close = searchInput.querySelector(".search-input__close");
  const entry = searchInput.querySelector(".search-input__entry");

  if (open) {
    open.addEventListener("click", function () {
      // document.querySelectorAll(`.search-input[data-id=${id}]`)
      // headerSearchFormInputs.forEach(function (input) {
      //   input.classList.add('active')
      // })

      open.closest(".search-input").classList.add("active");

      document.querySelector(".header").classList.add("hide-navigation");
      document
        .querySelector(".header")
        .classList.add("hide-mobile-primary-button");
    });
  }
  if (close) {
    close.addEventListener("click", function () {
      document
        .querySelectorAll(`.search-input[data-id=${id}]`)
        .forEach(function (input) {
          input.classList.remove("active");
        });
      document.querySelector(".header").classList.remove("hide-navigation");
      document
        .querySelector(".header")
        .classList.remove("hide-mobile-primary-button");
      document
        .querySelectorAll(`.search-input[data-id=${id}]`)
        .forEach(function (input) {
          input.querySelector("input").value = "";
        });
    });
  }
  if (entry) {
    entry.addEventListener("focus", function () {
      document
        .querySelectorAll(`.search-input[data-id=${id}]`)
        .forEach(function (input) {
          input.classList.add("focused");
        });
    });
    entry.addEventListener("blur", function () {
      document
        .querySelectorAll(`.search-input[data-id=${id}]`)
        .forEach(function (input) {
          input.classList.remove("focused");
        });
    });
    entry.addEventListener("change", function () {
      document
        .querySelectorAll(`.search-input[data-id=${id}]`)
        .forEach(function (input) {
          input.querySelector("input").value = entry.value;
        });
    });
  }
});

document.querySelectorAll(".primary-picker").forEach(function (picker) {
  const triger = picker.querySelector(".primary-picker__button");
  triger &&
    triger.addEventListener("click", function () {
      if (!picker.classList.contains("blured")) {
        this.parentNode.classList.toggle("active");
        this.parentNode.focus();
      }
    });
  picker.addEventListener("blur", function () {
    this.classList.remove("active");
    this.classList.add("blured");
    setTimeout(() => {
      this.classList.remove("blured");
    }, 200);
  });
});

document.querySelectorAll(".helper").forEach(function (helper) {
  const open = helper.querySelector(".helper__button--action");
  const close = helper.querySelector(".helper__button--close");
  open &&
    open.addEventListener("click", function () {
      helper.classList.toggle("active");
      document.querySelector(".overlay").classList.toggle("active");
      document.body.classList.toggle("overflow-hidden");
    });
  close &&
    close.addEventListener("click", function () {
      helper.classList.remove("active");
      document.querySelector(".overlay").classList.remove("active");
      document.body.classList.remove("overflow-hidden");
    });
});

document.addEventListener("DOMContentLoaded", () => {
  const button = document.querySelector(".mobile-fixed-button");

  if (window.innerWidth < 768) {
    setTimeout(() => {
      button.classList.remove("active");
    }, 4000);
  }
});

// document.querySelectorAll('.mobile-fixed-button').forEach(function (button) {
//   button.focus()
//   button.addEventListener('blur', function () {
//     setTimeout(() => {
//       button.classList.remove('active')
//     }, 200)
//   })
// })

document.querySelectorAll(".overlay").forEach(function (overlay) {
  overlay.addEventListener("click", function () {
    const helper = document.querySelector(".helper");
    helper && helper.classList.remove("active");
    overlay.classList.remove("active");
    document.body.classList.remove("overflow-hidden");
    document
      .querySelector(".pop-up-phone-numbers")
      .classList.remove("pop-up-numbers-visisble");
  });
});

document.querySelectorAll(".checkbox").forEach(function (checkbox) {
  checkbox.addEventListener("click", function (e) {
    checkbox.classList.toggle("active");
  });
});

document.querySelectorAll(".switcher").forEach(function (switcher) {
  switcher.addEventListener("click", function (e) {
    switcher.classList.toggle("active");
  });
});

document.querySelectorAll(".rd-slider").forEach(function (slider) {
  const start = Number(slider.dataset.set);
  const min = Number(slider.dataset.min);
  const max = Number(slider.dataset.max);
  const step = Number(slider.dataset.step);
  const buttonMin = slider.querySelector(".rd-slider__button--min");
  const buttonMax = slider.querySelector(".rd-slider__button--max");
  const content = slider.querySelector(".rd-slider__content");

  noUiSlider.create(content, {
    start,
    connect: [true, false],
    range: {
      min,
      max,
    },
    step,
    tooltips: wNumb({
      decimals: 3,
      thousand: ".",
      prefix: "RD$ ",
    }),
  });

  buttonMin.addEventListener("click", function () {
    content.noUiSlider.set(min);
  });

  buttonMax.addEventListener("click", function () {
    content.noUiSlider.set(max);
  });
});

document.querySelectorAll(".counter").forEach(function (counter) {
  const i = Number(counter.dataset.set) ? Number(counter.dataset.set) : 1;
  const min = Number(counter.dataset.min);
  const max = Number(counter.dataset.max);
  const minus = counter.querySelector(".counter__button--minus");
  const plus = counter.querySelector(".counter__button--plus");
  const content = counter.querySelector(".counter__content");
  const input = counter.querySelector("input");

  content.innerHTML = i;
  input.value = i;

  if (i == min) {
    minus.classList.add("disabled");
  } else if (i == max) {
    plus.classList.add("disabled");
  }

  minus.addEventListener("click", function () {
    let i = Number(content.innerHTML);

    if (i == min) return;
    i -= 1;
    content.innerHTML = i;
    input.value = i;
    plus.classList.remove("disabled");
    if (i == min) {
      minus.classList.add("disabled");
    }
  });

  plus.addEventListener("click", function () {
    let i = Number(content.innerHTML);

    if (i == max) return;
    i += 1;
    content.innerHTML = i;
    input.value = i;
    minus.classList.remove("disabled");
    if (i == max) {
      plus.classList.add("disabled");
    }
  });
});

const popUpNumbers = document.querySelector(".pop-up-phone-numbers");

document
  .querySelector(".helper__button.pop-up-numbers")
  .addEventListener("click", (e) => {
    e.preventDefault();

    if (popUpNumbers.classList.contains("pop-up-numbers-visisble")) {
      popUpNumbers.classList.remove("pop-up-numbers-visisble");
    } else {
      popUpNumbers.classList.add("pop-up-numbers-visisble");
    }

    document.querySelectorAll(".helper__button").forEach((button) => {
      button.addEventListener("click", (e) => {
        if (!e.target.parentElement.classList.contains("pop-up-numbers")) {
          if (popUpNumbers.classList.contains("pop-up-numbers-visisble")) {
            popUpNumbers.classList.remove("pop-up-numbers-visisble");
          }
        }
      });
    });
  });

class WebsiteSearch {
  constructor(form) {
    this.form = form;
    this.highlightClass = "highlight";
    this.searchInoutWrapper = document.querySelectorAll(
      ".site-header .search-input"
    );
    this.innerWrappers = document.querySelectorAll(".search-input__inner");
    this.masthead = document.querySelector("#masthead");
    this.resultCount = 0;
  }

  headerVariables() {
    this.searchResults = this.form.querySelector("#searchResults");
    this.searchInput = this.form.querySelector(".search-input__entry");
    this.toggleButton = this.form.querySelector(".search-input__button");
    this.innerWrapper = this.form.closest(".search-input__inner");

    this.init();
  }

  blockSearchVariables() {
    this.blockSearchResults = this.form.querySelector("#blockSearchResults");
    this.blockSearchinputWrapper = this.form.closest(".search__input");
    this.blockSearchToggleButton = this.form.querySelector(
      ".search-input__button"
    );
    this.blockInputEntry = this.form.querySelector(".search-input__entry");

    this.initBlockSearch();
  }

  init() {
    this.form.addEventListener("submit", (e) => {
      e.preventDefault();
    });

    this.searchInput.addEventListener("input", () => {
      this.handleSearchInput();
    });

    this.searchInput.addEventListener("focus", () => {
      this.searchInput.classList.add("active-input");
    });

    this.toggleButton.addEventListener("click", () => {
      this.clearSearchResults();
    });
  }

  initBlockSearch() {
    this.form.addEventListener("submit", (e) => {
      e.preventDefault();
    });

    this.blockInputEntry.addEventListener("input", () => {
      this.handleBlockSearchInput();
    });

    this.blockInputEntry.addEventListener("focus", () => {
      this.blockInputEntry.classList.add("active-input");
    });

    this.form
      .querySelector(".search-input__button")
      .addEventListener("click", () => {
        this.clearBlockSearchResults();
      });
  }

  async handleSearchInput() {
    this.searchInput.classList.remove("active-input");
    this.form
      .querySelector(".search-input__button .clear-search-icon")
      .classList.add("clear-active");
    this.form.querySelector(".search-input__button svg").style.display = "none";
    const searchTerm = this.searchInput.value.trim();

    if (searchTerm !== "") {
      const response = await fetch(
        `${origin}/wp-json/searchfor/v1/searchtext?search_term=${encodeURIComponent(
          searchTerm
        )}`
      );
      const data = await response.json();

      if (data.count > 0) {
        this.searchResults.innerHTML = "";
        this.searchResults.classList.add("results-visible");
        this.innerWrapper.classList.add("results-visible");
        const resultCountText = this.getResultCountText(data.count);
        this.searchResults.innerHTML = resultCountText + data.html;

        const resultItems = this.searchResults.querySelectorAll(
          ".search-result-item"
        );
        this.resultCount = resultItems.length;

        resultItems.forEach((item) => {
          const itemText = item.innerText;
          if (itemText) {
            const lowerCaseItemText = itemText.toLowerCase();
            const lowerCaseSearchTerm = searchTerm.toLowerCase();

            if (lowerCaseItemText.includes(lowerCaseSearchTerm)) {
              const highlightedText = itemText.replace(
                new RegExp(`(${lowerCaseSearchTerm})`, "gi"),
                `<span class="${this.highlightClass}">$1</span>`
              );
              item.innerHTML = highlightedText;

              item.addEventListener("click", () => {
                const targetValue = item.dataset.targetValue;
                if (targetValue) {
                  window.location.href = targetValue;
                }
              });
            } else {
              item.remove();
            }
          }
        });

        this.searchResults.addEventListener("change", () => {
          const selectedOption =
            this.searchResults.options[this.searchResults.selectedIndex];
          window.location.href = selectedOption.value;
        });
      } else {
        this.searchResults.innerHTML = `<div class="search-result-item">
                                            <p class="no-results-dark-blue">No se encontraron resultados</p>
                                            <p class="no-results-with-link">Por favor, intenta escribiendo otra palabra o ve 
                                              <a href="${data.product_page}">todos nuestros productos</a>
                                            </p>
                                          </div>`;
      }
    }
  }

  async handleBlockSearchInput() {
    this.blockInputEntry.classList.remove("active-input");
    document
      .querySelector(".search__input .search-input__button .clear-search-icon")
      .classList.add("clear-active");
    document.querySelector(
      ".search__input .search-input__button img"
    ).style.display = "none";
    const searchTerm = this.form
      .querySelector(".search-input__entry")
      .value.trim();

    if (searchTerm !== "") {
      const response = await fetch(
        `${origin}/wp-json/searchfor/v1/searchtext?search_term=${encodeURIComponent(
          searchTerm
        )}`
      );
      const data = await response.json();

      if (data.count > 0) {
        this.blockSearchResults.classList.add("results-visible");
        this.blockSearchinputWrapper.classList.add("results-visible");
        this.blockSearchResults.innerHTML = "";
        const resultCountText = this.getResultCountText(data.count);
        this.blockSearchResults.innerHTML = resultCountText + data.html;

        const resultItems = this.blockSearchResults.querySelectorAll(
          ".search-result-item"
        );
        resultItems.forEach((item) => {
          const itemText = item.innerText;
          if (itemText) {
            const lowerCaseItemText = itemText.toLowerCase();
            const lowerCaseSearchTerm = searchTerm.toLowerCase();

            if (lowerCaseItemText.includes(lowerCaseSearchTerm)) {
              const highlightedText = itemText.replace(
                new RegExp(`(${lowerCaseSearchTerm})`, "gi"),
                `<span class="${this.highlightClass}">$1</span>`
              );
              item.innerHTML = highlightedText;

              item.addEventListener("click", () => {
                const targetValue = item.dataset.targetValue;
                if (targetValue) {
                  window.location.href = targetValue;
                }
              });
            } else {
              item.remove();
            }
          }
        });

        this.blockSearchResults.addEventListener("change", () => {
          const selectedOption =
            this.blockSearchResults.options[
              this.blockSearchResults.selectedIndex
            ];
          window.location.href = selectedOption.value;
        });
      } else {
        this.blockSearchResults.innerHTML = `<div class="search-result-item">
                                                  <p class="no-results-dark-blue">No se encontraron resultados</p>
                                                  <p class="no-results-with-link">Por favor, intenta escribiendo otra palabra o ve 
                                                    <a href="${data.product_page}">todos nuestros productos</a>
                                                  </p>
                                                </div>`;
      }
    }
  }

  getResultCountText(count) {
    return `<div class="search-result-count">Se encontraron ${count} resultados</div>`;
  }

  clearSearchResults() {
    this.searchResults.innerHTML = "";
    this.searchResults.classList.remove("results-visible");
    this.masthead.classList.remove("hide-navigation");
    this.masthead.classList.remove("hide-mobile-primary-button");
    this.searchInput.value = "";

    this.searchInoutWrapper.forEach((wrapper) =>
      wrapper.classList.remove("active")
    );
    this.innerWrappers.forEach((wrapper) =>
      wrapper.classList.remove("results-visible")
    );

    document
      .querySelectorAll("#masthead .search-input__entry")
      .forEach((entry) => {
        entry.classList.remove("active-input");
        entry.value = "";
      });

    this.form
      .querySelector(".search-input__button .clear-search-icon")
      .classList.remove("clear-active");
    this.form.querySelector(".search-input__button svg").style.display =
      "block";
  }

  clearBlockSearchResults() {
    this.blockSearchinputWrapper.classList.remove("results-visible");
    this.blockSearchResults.classList.remove("results-visible");
    this.blockInputEntry.value = "";

    document
      .querySelector(".search__input .search-input__entry")
      .classList.remove("active-input");
    document
      .querySelector(".search__input .search-input__button .clear-search-icon")
      .classList.remove("clear-active");
    document.querySelector(
      ".search__input .search-input__button img"
    ).style.display = "block";
  }
}

const headerSearchForms = [
  document.querySelector(".lheader #header-search-form"),
  document.querySelector(".mob_search_1 #header-search-form"),
  document.querySelector(".mob_search_2 #header-search-form"),
];

headerSearchForms.forEach((form) => {
  const headerSearch = new WebsiteSearch(form);
  headerSearch.headerVariables();
});
