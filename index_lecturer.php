<?php
include_once "session.php";

if($user==''){
  header("location:login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Lecturer Dashboard</title>
</head>

<body>

  <?php include "navbar.php" ?>

  <div class="col-lg-8 mx-auto p-4 py-md-5">

    <header class="d-flex align-items-center pt-5 pb-3 mb-5 border-bottom">
      <h1>
        <span style="font-weight: bolder;">
          Hi lecturer! 👋🏼 <br>
        </span>
        <span>
          Marziana Majid
        </span>
      </h1>
    </header>

    <main class="pb-5">

      <h2 class="text-body-emphasis">Appointment List</h2>
      <table class="table table-responsive table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Student</th>
            <th scope="col">Time</th>
            <th scope="col">Desc</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Fazila Azhari</td>
            <td>12/11/2023, 14:00</td>
            <td>FYP consult</td>
            <td>
              <div class="dropdown">
                <button class="btn dropdown-toggle btn-sm status-button" type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  Pending
                </button>
                <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                  <li><a class="dropdown-item" href="#" data-status="Pending">Pending</a></li>
                  <li><a class="dropdown-item" href="#" data-status="Approve">Approve</a></li>
                  <li><a class="dropdown-item" href="#" data-status="Decline">Decline</a></li>
                </ul>
              </div>
            </td>
            <td>
              <a href="" class="btn btn-danger btn-sm" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                </svg>
              </a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Irfan Zaki</td>
            <td>14/11/2023, 15:00</td>
            <td>Task 2 consult</td>
            <td>
              <div class="dropdown">
                <button class="btn dropdown-toggle btn-sm status-button" type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  Approve
                </button>
                <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                  <li><a class="dropdown-item" href="#" data-status="Pending">Pending</a></li>
                  <li><a class="dropdown-item" href="#" data-status="Approve">Approve</a></li>
                  <li><a class="dropdown-item" href="#" data-status="Decline">Decline</a></li>
                </ul>
              </div>
            </td>
            <td>
              <a href="" class="btn btn-danger btn-sm" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                </svg>
              </a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Shazrina Azhar</td>
            <td>13/11/2023, 14:00</td>
            <td>Letter sign</td>
            <td>
              <div class="dropdown">
                <button class="btn dropdown-toggle btn-sm status-button" type="button" id="statusDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  Decline
                </button>
                <ul class="dropdown-menu" aria-labelledby="statusDropdown">
                  <li><a class="dropdown-item" href="#" data-status="Pending">Pending</a></li>
                  <li><a class="dropdown-item" href="#" data-status="Approve">Approve</a></li>
                  <li><a class="dropdown-item" href="#" data-status="Decline">Decline</a></li>
                </ul>
              </div>
            </td>
            <td>
              <a href="" class="btn btn-danger btn-sm" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                </svg>
              </a>
            </td>
          </tr>
        </tbody>
      </table>

    </main>

    <footer class="pt-5 text-body-secondary border-top text-center">
      Created by Shazrina for FYP &middot; &copy; 2023
    </footer>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const dropdownButtons = document.querySelectorAll(".status-button");

      dropdownButtons.forEach(function(button) {
        const initialStatus = button.textContent.trim();

        switch (initialStatus) {
          case "Pending":
            button.classList.remove("btn-success", "btn-danger");
            button.classList.add("btn-warning");
            break;
          case "Approve":
            button.classList.remove("btn-warning", "btn-danger");
            button.classList.add("btn-success");
            break;
          case "Decline":
            button.classList.remove("btn-warning", "btn-success");
            button.classList.add("btn-danger");
            break;
        }

        const dropdownItems = button.nextElementSibling.querySelectorAll(".dropdown-item");

        dropdownItems.forEach(function(item) {
          item.addEventListener("click", function() {
            const selectedStatus = this.getAttribute("data-status");

            button.textContent = selectedStatus;

            switch (selectedStatus) {
              case "Pending":
                button.classList.remove("btn-success", "btn-danger");
                button.classList.add("btn-warning");
                break;
              case "Approve":
                button.classList.remove("btn-warning", "btn-danger");
                button.classList.add("btn-success");
                break;
              case "Decline":
                button.classList.remove("btn-warning", "btn-success");
                button.classList.add("btn-danger");
                break;
            }
          });
        });
      });
    });
  </script>



</body>

</html>