window.onbeforeunload = () => {
  for (const form of document.getElementsByTagName("form")) {
    form.reset();
  }
};

openMenu = () => {
  document.getElementsByClassName("menu-primario-container")[0].style.display =
    "flex";
};
