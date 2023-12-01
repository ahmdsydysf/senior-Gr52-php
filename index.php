<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>

  </style>
</head>

<body>

  <div class="container mt-5">
    <h1 class="alert-info text-center mb-5 p-3">
      AJAX--PHP--JS & Bootstrap-5
    </h1>
    <div class="row">
      <form class="col-sm-5" id="myform">
        <h3 class="alert-warning text-center p-2">
          Add / Update Students
        </h3>
        <div>
          <!-- <input style="display:none;" type="text" class="form-control" id="stuid"> -->
          <label for="nameid" class="form-label">name</label>
          <input type="text" class="form-control" id="nameid">
        </div>
        <div>
          <label for="emailid" class="form-label">email</label>
          <input type="text" class="form-control" id="emailid">
        </div>
        <div>
          <label for="passwordid" class="form-label">password</label>
          <input type="text" class="form-control" id="passwordid">
        </div>
        <div class="mt-5">
          <button type="submit" class="btn btn-primary" id="btnadd">save</button>
        </div>
        <div id="msg"></div>
      </form>
      <div class="col-sm-7 text-center">
        <h3 class="alert-warning p-2">
          Show Student Infooo
        </h3>
        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NAME</th>
              <th scope="col">EMAIL</th>
              <th scope="col">PASSWORD</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody id="tbody">

          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <script>
    document.querySelector('#btnadd').addEventListener('click' , addStudent);

    function addStudent(e){
      e.preventDefault();
      let nm =document.querySelector('#nameid').value;
      let em =document.querySelector('#emailid').value;
      let pw =document.querySelector('#passwordid').value;

      const nxhr = new XMLHttpRequest();
      nxhr.open('POST' , 'insert.php');
      nxhr.onload = function(){
        if(nxhr.status === 200){
          document.querySelector('#msg').innerHTML = `
            <div class='alert alert-success'>
              ${nxhr.responseText}
            </div>
          `
          document.querySelector('#myform').reset();
        }else{
          alert('plz try agaaaain !!!');
        }
      }

      const formData = {
        name : nm ,
        email : em ,
        pass : pw ,
      }

      let formDataToJSON = JSON.stringify(formData)// convert from js to JSON 

      nxhr.send(formDataToJSON);

      showData();
    }

    let tBody = document.querySelector('#tbody');

    function showData(){
      tBody.innerHTML = "" ;
      const nxhr = new XMLHttpRequest();
      nxhr.open('GET' , 'alldata.php');
      nxhr.onload = function(){
        if(nxhr.status === 200){
          $myData = JSON.parse(nxhr.responseText); // to convert from json
          $myData.forEach(snglStud => {
            tBody.innerHTML += `
              <tr>
                <td> ${snglStud.id}  </td>
                <td> ${snglStud.name}  </td>
                <td> ${snglStud.email}  </td>
                <td> ${snglStud.password}  </td>
                <td> 
                  <button class='btn btn-info' onclick="edt_student(this)" data-flag='${snglStud.id}' > Edit </button>
                  <button class='btn btn-danger' data-flag='${snglStud.id}'> Delete </button>
                </td>
              </tr>
            
            
            `
          }); 
        }else{
          alert('show data errrrrrrrrrrror');
        }

      }

      nxhr.send();
    }
    showData();


  </script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
</body>

</html>