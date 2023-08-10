class SiteFunctions {
  constructor() {
    this.bodyElement = document.querySelector("body");
    this.mainElement = document.querySelector("#main");
    this.loginForm = document.querySelector(".placeholder-form");
    this.mobileOpen = document.querySelector(".header__mobile-burger");
    this.mobileClose = document.querySelector(".header__mobile-close");
    this.menuWrapper = document.querySelector(".header__position-wrapper");
    this.closeLoginFormIcon = this.loginForm.querySelector(
      ".top-header__close-form"
    );
    this.menuTopItems = [
      ...document.querySelectorAll(".header__menu-list .menu-item"),
    ];
    this.topHeaderLoginLinks = document.querySelectorAll(".top-header__text");
    this.quizAnswerItems = document.querySelectorAll(".footer__answers-item");
    this.quizMiddleContentPart = document.querySelector(
      ".footer__quiz-content"
    );

    this.handleMenu();
    this.handleTopHeaderLoginLink();
    this.openMobileMenu();
    this.handleFooterQuiz();
  }

  handleFooterQuiz() {
    document.querySelectorAll(".footer__answers-item").forEach((answerItem) => {
      answerItem.addEventListener("click", async () => {
        const quizAction = answerItem.dataset.quizaction;

        if (quizAction && quizAction.startsWith("http")) {
          window.location.href = quizAction;
          return;
        }

        if (quizAction) {
          try {
            const response = await fetch(
              `${origin}/wp-json/quiz/v1/quiz-item/?quiz_item=${quizAction}`
            );
            const data = await response.json();

            this.quizMiddleContentPart.innerHTML = "";
            this.quizMiddleContentPart.innerHTML += data.data.html;

            if (quizAction === "firstForm") {
              const firstForm = document.querySelector(
                ".footer__quiz-answers-forms #gform_wrapper_1"
              );

              this.handleQuizFormActions(firstForm);
            }

            if (quizAction === "formTwo") {
              const secondForm = document.querySelector(
                ".footer__quiz-answers-forms #gform_wrapper_2"
              );
              const backToPrevious = document.querySelector(
                ".footer__back-to-previous"
              );

              backToPrevious.classList.add("back-to-previous--visible");
              this.handleQuizFormActions(secondForm);
              this.handleBackToPreviousAction(
                backToPrevious,
                secondForm,
                backToPrevious
              );
            }

            this.handleFooterQuiz();
          } catch (error) {
            console.error(error);
          }
        }
      });
    });
  }

  handleMenu() {
    this.handleTopMenuItems();
  }

  handleTopMenuItems() {
    this.menuTopItems.map((menuItem) => {
      menuItem.addEventListener("click", async (e) => {
        e.stopPropagation();

        this.loginForm.classList.remove("form-visible");

        let slicedClassName = null;
        const classListString = Array.from(menuItem.classList).join(" ");

        if (classListString.includes("childrens-")) {
          e.preventDefault();

          if (window.innerWidth < 768) {
            const clickedText = menuItem.innerText;

            this.menuTopItems.forEach((item) => {
              item.style.display = "none";
            });

            menuItem.style.display = "flex";

            const liElement = document.createElement("li");
            liElement.innerText = clickedText;
            liElement.classList.add("go-back");

            const parentElement = document.getElementById("menu-primary");
            parentElement.appendChild(liElement);
          }

          if (menuItem.classList.contains("child-level-visible")) {
            this.resetMenu();
          } else {
            this.menuTopItems.map((item) => {
              item.classList.remove("child-level-visible");
            });

            this.mainElement.classList.add("element-blured");
            this.bodyElement.classList.add("element-blured");
            menuItem.classList.add("child-level-visible");

            const dropDownWrapper = document.querySelector(
              ".header__dropdown-wrapper"
            );

            if (dropDownWrapper) {
              dropDownWrapper.remove();
            }

            if (classListString.includes("childrens-")) {
              for (let i = 0; i < menuItem.classList.length; i++) {
                const className = menuItem.classList[i];

                if (className.startsWith("childrens-")) {
                  slicedClassName = className.slice(10);

                  if (slicedClassName) {
                    try {
                      const response = await fetch(
                        `${origin}/wp-json/menu-items/v1/options/?parent_item=${slicedClassName}`
                      );
                      const data = await response.json();
                      menuItem.innerHTML += data.html;

                      this.handleDropdownLinks();
                    } catch (error) {
                      console.error(error);
                    }
                  }

                  break;
                }
              }
            }
          }

          this.handleActiveItem();
          this.handleCloseMenu();
        }
      });
    });
  }

  handleCloseMenu() {
    this.mainElement.addEventListener("click", () => {
      this.resetMenu();
    });
  }

  handleTopHeaderLoginLink() {
    this.topHeaderLoginLinks.forEach((loginLink) => {
      loginLink.addEventListener("click", (e) => {
        e.preventDefault();

        this.mainElement.classList.add("element-blured");
        this.bodyElement.classList.add("element-blured");
        this.loginForm.classList.add("form-visible");

        this.clearMainElement();
        this.handleCloseForm();
      });
    });
  }

  resetMenu() {
    const activeItem = document.querySelector(
      ".dropdown-menu-item.child-level-visible"
    );
    const dropdownMenu = document.querySelector(".header__dropdown-wrapper");

    if (activeItem) {
      activeItem.classList.remove("child-level-visible");
    }

    if (dropdownMenu) {
      document.querySelector(".header__dropdown-wrapper").remove();
    }

    this.bodyElement.classList.remove("element-blured");
    this.mainElement.classList.remove("element-blured");
  }

  clearMainElement() {
    document.querySelector("#main").addEventListener("click", () => {
      this.removeElementClasses();
    });
  }

  handleCloseForm() {
    this.closeLoginFormIcon.addEventListener("click", () => {
      this.removeElementClasses();
    });
  }

  openMobileMenu() {
    this.mobileOpen.addEventListener("click", () => {
      this.mobileOpen.style.display = "none";
      this.mobileClose.style.display = "block";
      this.menuWrapper.classList.add("menu-visible");
      this.bodyElement.classList.add("element-blured");

      this.closeMobileMenu();
    });
  }

  closeMobileMenu() {
    this.mobileClose.addEventListener("click", () => {
      this.mobileOpen.style.display = "block";
      this.mobileClose.style.display = "none";
      this.menuWrapper.classList.remove("menu-visible");
      this.bodyElement.classList.remove("element-blured");

      if (document.querySelector(".header__dropdown-wrapper")) {
        document.querySelector(".header__dropdown-wrapper").remove();
      }

      if (document.querySelector(".go-back")) {
        document.querySelector(".go-back").remove();
      }

      this.menuTopItems.forEach((item) => {
        item.classList.remove("child-level-visible");
        item.style.display = "flex";
      });

      this.removeElementClasses();
    });
  }

  handleActiveItem() {
    const activeItem = document.querySelector(".go-back");

    if (activeItem) {
      activeItem.addEventListener("click", () => {
        document.querySelector(".header__dropdown-wrapper").remove();

        this.menuTopItems.forEach((item) => {
          item.classList.remove("child-level-visible");
          item.style.display = "flex";
        });

        activeItem.remove();
      });
    }
  }

  removeElementClasses() {
    document.querySelector("#main").classList.remove("element-blured");
    this.bodyElement.classList.remove("element-blured");
    this.loginForm.classList.remove("form-visible");
  }

  handleDropdownLinks() {
    document
      .querySelector(".header__dropdown-links")
      .addEventListener("click", (e) => {
        e.stopPropagation();
      });
  }

  handleQuizFormActions(form) {
    form.style.display = "block";

    jQuery(document).on("gform_confirmation_loaded", function (event, formId) {
      document.querySelector(".footer__top-text").style.display = "none";
      document.querySelector(".footer__normal-text").style.display = "none";
      document.querySelector(".footer__quiz-question").style.display = "none";
    });
  }

  handleBackToPreviousAction(backToPrevious, form, backToLink) {
    backToPrevious.addEventListener("click", async () => {
      const quizAction = backToPrevious.dataset.quizaction;

      try {
        const response = await fetch(
          `${origin}/wp-json/quiz/v1/quiz-item/?quiz_item=${quizAction}`
        );
        const data = await response.json();

        this.quizMiddleContentPart.innerHTML = "";
        this.quizMiddleContentPart.innerHTML += data.data.html;
        form.style.display = "none";
        backToLink.classList.remove("back-to-previous--visible");

        this.handleFooterQuiz();
      } catch (error) {
        console.error(error);
      }
    });
  }
}

new SiteFunctions();
