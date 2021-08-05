function initAccordion(accordionElem) {
  function handlePanelClick(event) {
    showPanel(event.currentTarget);
  }

  function showPanel(panelHeader) {
    let isActive,
      panel = panelHeader.parentNode,
      panelBody = panelHeader.nextElementSibling,
      expandedPanel = document.querySelector(".accordion__el.active");

    isActive =
      expandedPanel && panel.classList.contains("active") ? true : false;

    if (expandedPanel) {
      expandedPanel.querySelector(".accordion__body").style.height = null;
      expandedPanel.classList.remove("active");
    }

    if (panel && !isActive) {
      panelBody.style.height = panelBody.scrollHeight + "px";
      panel.classList.add("active");
    }
  }

  let allPanelElements = document.querySelectorAll(".accordion__el");

  for (let i = 0; i < allPanelElements.length; i++) {
    allPanelElements[i]
      .querySelector(".accordion__head")
      .addEventListener("click", handlePanelClick);
  }

  showPanel(allPanelElements);
}

initAccordion(document.getElementsByClassName("accordion"));
