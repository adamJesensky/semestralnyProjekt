// functions.js


// Function to delete a user
function deleteUser(id) {
  console.log("Deleting user with ID:", id);
  $.ajax({
    type: "POST",
    url: 'delete.php',
    data: {
      id: id
    },
    success: function(data) {
      console.log("User deleted successfully:", data);
      successAlert( 'Úspešne si vymazal užívateľa');
      fetchData();
    },
    error: function(error) {
      console.error("Error deleting user:", error); 
    }
  });
}

 //function with a modal for editing the user details:
 function editUser(id) {
  console.log("Editing user with ID:", id);
  // Fetch the user data from the server
  fetch(`get_user.php?id=${id}`)
  .then(response => response.json())
  .then(data => {
    // Fill the form with the user data
    document.querySelector("#editForm #id").value = data.id;
    document.querySelector("#editForm #username").value = data.username;
    document.querySelector("#editForm #password").value = data.password;
    // Show the modal
    $("#editModal").modal("show");
 })
 .catch(error => console.log(error));
}

// Function for submitting the form to edit a user
function submitEditForm() {
  // Get the form data
  var formData = new FormData(document.querySelector("#editForm"));

  // Send a POST request to the server with the form data
  fetch("update.php", {
    method: "POST",
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      if (data.status === "success") {
        // Close the modal
        const modal_el  = document.querySelector('#editModal');
        const modal_obj = bootstrap.Modal.getInstance(modal_el);
        modal_obj.hide();
        successAlert( 'Úspešne si upravil užívateľa');
        fetchData(); //refresh the table
      } else {
        errorAlert('Pri úprave používateľa sa vyskytla chyba. Prosím skúste znova.');
      }
    })
    .catch(error => console.log(error));
}



//function that can handle the form submission for creating a new user
function createUser() {
  console.log("Creating user");
   // Get the max id from the table
   $.ajax({
    url: 'get_highest_id.php',
    type: 'post',
    dataType: 'json',
    success: function(data) {
      console.log("Max ID received: ", data);
       // Get the form data
      let formData = $('#createForm').serializeArray();
      console.log("Form data: ", formData);
      
      // Add the id to the form data
      formData.push({ name: 'id', value: data.highest_id  + 1 });
      console.log("Form data with ID: ", formData);
      
      // Save the data to the database
      $.ajax({
        url: 'create_user.php',
        type: 'post',
        data: formData,
        success: function(response) {
          console.log("User created successfully: ", response);
          // Close the modal
          const modal_el  = document.querySelector('#ModalForm');
          const modal_obj = bootstrap.Modal.getInstance(modal_el);
          modal_obj.hide();
          // Show a success message
          successAlert( 'Úspešne si vytvoril užívateľa');
          fetchData();
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText);
          console.log("Error creating user: ", error);
        }
      });
    },
    error: function(xhr, status, error) {
      console.log(xhr.responseText);
      console.log("Error getting max ID: ", error);
    }
  });
}

// Function to fetch data from the server
function fetchData() {
  console.log("Fetching data from server...");
  $.ajax({
    type: "GET",
    url: 'get_users.php',
    success: function(data) {
      console.log("Data fetched successfully:", data);
      updateTable(data);
    },
    error: function(error) {
      console.error("Error fetching data:", error);
    }
  });
}

// Function to update the table with the data
function updateTable(data) {
  console.log("Updating table with data:", data);
  data = JSON.parse(data);
  $('.user_table').find('tbody').empty();  // select the tbody element inside the table with class "user_table"
  for (var i = 0; i < data.length; i++) {
    var row = '<tr>';
    row += '<td>' + data[i].id + '</td>';
    row += '<td>' + data[i].username + '</td>';
    row += '<td>' + data[i].password + '</td>';
    row += '<td>' + data[i].created_at + '</td>';
    // row += '<td>' + data[i].last_login + '</td>';
    row += '<td><button class="btn btn-primary" onclick="editUser(' + data[i].id + ')">Edit</button></td>';
    row += '<td><button class="btn btn-danger" onclick="deleteUser(' + data[i].id + ')">Delete</button></td>';
    row += '</tr>';
    $('.user_table').find('tbody').append(row);
  }
}


//////////////////////////////////////////////////////////////////// OZNAMY //////////////////////////////////////////////////////////////////
function createAnnouncement() {
  console.log("Create Announcement");
   // Get the form data
   var formData = new FormData(document.querySelector("#createAnnouncementForm"));
   // Send a POST request to the server with the form data
   fetch("create_announcement.php", {
     method: "POST",
     body: formData
   })
     .then(response => response.json())
     .then(data => {
       console.log(data);
       if (data.status === "success") {
        // Close the modal
        const modal_el  = document.querySelector('#createAnnouncementModal');
        const modal_obj = bootstrap.Modal.getInstance(modal_el);
        modal_obj.hide();
           // Show a success message
           successAlert( 'Oznam bol úspešne vytvorený!'); 
         fetchAnnouncements(); //refresh the table
       } else {
        errorAlert('Pri vytváraní oznámenia sa vyskytla chyba. Prosím skúste znova.');
       }
     })
     .catch(error => console.log(error));
}

function fetchAnnouncements() {
  // Fetch the announcements from the server
  console.log("Fetch the announcements from the server");
  fetch("get_announcements.php")
    .then(response => {
      if (!response.ok) {
          throw new Error(response.statusText);
      }
      return response.json();
  })
    .then(data => {
      // Get the table body
      var tableBody = document.querySelector(".announcement-table tbody");
      // Clear the table body
      tableBody.innerHTML = "";
      // Loop through the data and add a row for each announcement
      data.forEach(announcement => {
        var row = document.createElement("tr");
        // <td>${announcement.id}</td>
        row.innerHTML = `
        <td>${announcement.announcement_text}</td>
        <td>${announcement.created_at}</td>
        <td><button class="btn btn-primary" onclick="editAnnouncement(${announcement.id})">Edit</button></td>
        <td><button class="btn btn-danger" onclick="deleteAnnouncement(${announcement.id})">Delete</button></td>
        `;
        tableBody.appendChild(row);
      });
    })
    .catch(error => console.log(error));
}

function editAnnouncement(id) {
  console.log(" Open the edit modal for id: ", id);
  // Get the announcement data from the server
  fetch(`get_announcement_id.php?id=${id}`)
    .then(response => response.json())
    .then(data => {
      // Populate the form with the current announcement data
      document.querySelector("#editAnnouncementId").value = data.id;
      document.querySelector("#editAnnouncementText").value = data.announcement_text;
      // Show the modal
      $('#editAnnouncementModal').modal('show');
    })
    .catch(error => {
      console.log(error);
      errorAlert('Pri načítavaní údajov oznámenia sa vyskytla chyba.');
    });
}

function submitEditAnnouncementForm() {  
  // Get the form data
  const formData = new FormData(document.querySelector("#editAnnouncementForm"));
  // Get the id and announcement text fields from the form data
  const id = formData.get("editAnnouncementId");
  const announcementText = formData.get("editAnnouncementText");
  console.log("Editting announcement! id: ", id, "text: ", announcementText);

  // Send the data to the server
  fetch("edit_announcement.php", {
      method: "POST",
      body: formData
  })
    .then(response => response.json())
    .then(data => {
        // Check if the announcement was edited successfully
        if (data.success) {
            // Refresh the announcements table
            fetchAnnouncements();
            // Close the modal
            $('#editAnnouncementModal').modal('hide');
            // Show a success message
            successAlert( 'Úspešne si upravil oznam!'); 
        } else {
            // Show an error message  
            errorAlert(data.message);
        }
    });
}

function deleteAnnouncement(id) {
  // Send a DELETE request to the server with the ID of the announcement to be deleted
  fetch(`delete_announcement.php?id=${id}`, {
    method: "DELETE"
  })
  .then(response => response.json())
  .then(data => {
    // Check if the announcement was deleted successfully
    if (data.success) {
      // Show a success message
      successAlert("Oznam bol úspešne vymazaný");
    } else {
      // Show an error message
      errorAlert(data.message);
    }
    // Refresh the announcements table
    fetchAnnouncements();
  });
}
//////////////////////////////////////////////////////////////////// END OZNAMY //////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////// ALERTY //////////////////////////////////////////////////////////////////
function successAlert(msg){
  Swal.fire({
    icon: 'success',
    title: msg
  });
}
function errorAlert(msg){
  Swal.fire({
    icon: "error",
    title: "Chyba",
    text: msg
});
}
//////////////////////////////////////////////////////////////////// END ALERTY //////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////// ADD PHOTOS //////////////////////////////////////////////////////////////////
function displayFileSize() {
  var input = document.querySelector('#addPhotosInput');
  var files = input.files;
  var fileSize = 0;
  for (var i = 0; i < files.length; i++) {
    fileSize += files[i].size;
  }
  var size = fileSize / (1024 * 1024);
  document.querySelector('#fileSize').innerHTML = "Veľkosť: " + size.toFixed(2) + " MB";
}

function uploadPhotos() {
  console.log("Uploading photos");
  // Get the form data
  const formData = new FormData();
  const files = document.querySelector("#addPhotosInput").files;
  for (let i = 0; i < files.length; i++) {
      formData.append("file[]", files[i]);
  }
    // Send the data to the server
    fetch("upload_photos.php", {  
        method: "POST",
        body: formData
      })
      .then(response => response.json())
      .then(data => {
          // Check if the photos were uploaded successfully
          if (data.success) {
              // Show a success message
              successAlert('Photos were uploaded successfully!');
            } else {
              // Show an error message
              errorAlert(data.message);
            }
      });
      
}
//////////////////////////////////////////////////////////////////// END ADD PHOTOS //////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////// ADD REVIEW //////////////////////////////////////////////////////////////////
function displayFileSizeReview() {
  var input = document.querySelector('#addReviewInput');
  addReviewInput
  var files = input.files;
  var fileSize = 0;
  for (var i = 0; i < files.length; i++) {
    fileSize += files[i].size;
  }
  var size = fileSize / (1024 * 1024);
  document.querySelector('#fileSize').innerHTML = "Veľkosť: " + size.toFixed(2) + " MB";
}

function uploadReview() {
  console.log("Uploading review");
  // Get the form data
  const formData = new FormData();
  const file = document.querySelector("#addReviewInput").files[0];
  formData.append("file", file);
  formData.append("title", document.querySelector("#title").value);
  formData.append("description", document.querySelector("#description").value);

  // Send the data to the server
  fetch("create_review.php", {
    method: "POST",
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      // Check if the review was uploaded successfully
      if (data.success) {
        // Show a success message
        successAlert('Recenzia bola úspešne nahraná!');
      } else {
        // Show an error message
        errorAlert(data.message);
      }
    });
}
//////////////////////////////////////////////////////////////////// END ADD REVIEW //////////////////////////////////////////////////////////////////