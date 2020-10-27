document.addEventListener("DOMContentLoaded", () => {
  let $paragraphs = $("#searchBox p");

  $("#searchBar").on("keyup", (e) => {
    let word = $(e.delegateTarget).val();

    //Update DOM
    $paragraphs.each(function () {
      if (!$(this).text().includes(word)) {
        $(this).hide();
      } else {
        $(this).show();
      }
    });
  });
});
