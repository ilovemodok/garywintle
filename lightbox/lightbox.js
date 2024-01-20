export default class lightbox {
  static activate() {
    console.log("Lightbox is activated!");
    document.body.insertAdjacentHTML(
      "beforeend",
      `
      <div class="lightbox" id="lightbox" style="display: none;">
        <div class="lightbox__inner">
          <button type="button" class="lightbox__close">
          &times;
          </button>
          <div class="lightbox__content"></div>
        </div>
      </div>
    `
    );

    const lightBox = document.querySelector("#lightbox");
    const btnClose = lightBox.querySelector(".lightbox__close");
    const content = lightBox.querySelector(".lightbox__content");
    const closeLightbox = () => {
      lightBox.style.display = "none";
      content.innerHTML = "";
    };

    lightBox.addEventListener("mousedown", (e) => {
      if (e.target.matches("#lightbox")) {
        closeLightbox();
      }
    });

    btnClose.addEventListener("click", () => {
      closeLightbox();
    });
  }

  static show(htmlOrElement) {
    const content = document.querySelector("#lightbox .lightbox__conent");

    console.log(content);
  }
}
