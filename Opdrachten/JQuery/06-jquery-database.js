$(document).ready(function () {
  const dTable = $("#theBeatles").DataTable({
    ajax: "https://api.dev-master.ninja/js/beatles",
    columns: [
      { data: "id" },
      { data: "firstname" },
      { data: "lastname" },
      { data: "dateOfBirth" },
      { data: "email" },
    ],
  });

  // Reload the table every 10 seconds
  setInterval(function () {
    dTable.ajax.reload();
  }, 10000);

  $("#personForm").on("submit", function (event) {
    event.preventDefault(); // voorkomt dat de pagina herlaadt

    const firstname = $("#firstname").val();
    const lastname = $("#lastname").val();
    const email = $("#email").val();

    $.ajax({
      url: "https://api.dev-master.ninja/js/person/save",
      method: "POST",
      data: {
        firstname: firstname,
        lastname: lastname,
        email: email,
      },
      success: function (result) {
        console.log("Opgeslagen:", result);

        // velden leegmaken
        $("#personForm")[0].reset();
      },
    });
  });
});
