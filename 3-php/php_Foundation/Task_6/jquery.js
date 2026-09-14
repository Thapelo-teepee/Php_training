// Create Person onsubmit form
$("#innerForm").on("submit", function (e) {
  e.preventDefault();
  $.post("index.php", $(this).serialize() + "&action=create", function (res) {
    const result = JSON.parse(res);
    const form = this;
    $("#response").text(result.message);
  });
});

// delete person by PersonID
$(".deleteButton").on("click", function (event) {
  event.preventDefault();
  const personID = $(this).data("id");

  $.post(
    "index.php",
    { PersonID: personID, action: "delete" },
    function (response) {
      const result = JSON.parse(response);
      $("#response").text(result.message);

      if (result.status === "success") {
        setTimeout(function () {
          location.reload();
        }, 30000);
      }
    },
  );
});

// delete all data from the table
$("#deleteAllButton").on("click", function (event) {
  event.preventDefault();

  $.post("index.php", { action: "deleteall" }, function (response) {
    const result = JSON.parse(response);

    $("#response").text(result.message);

    if (result.message === "success") {
      setTimeout(function () {
        location.reload();
      }, 30000);
    }
  });
});
