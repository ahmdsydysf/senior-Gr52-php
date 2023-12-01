<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div id="content" >fake content</div>

  <button onclick="gettest()">get - data with ajax</button>

  <script>

    function gettest(){
      let mycontent = document.getElementById('content');


      let nxhr = new XMLHttpRequest();
      nxhr.open('GET' , 'testdadgsdfgta.php', true );

      // readystate -
      // 0 => request not init
      // 1 => server conenction established
      // 2 => request recived
      // 3 => processing the request to return responseText
      // 4 => request finished , reponse ready

      // status  200  ok

      // nxhr.onreadystatechange = function(){
      //   console.log(nxhr);
      // if(this.readyState == 4 && this.status == 200 ){
      //   mycontent.innerHTML += nxhr.responseText
      // }
        
      // }
      // nxhr.send();
      // let nxhr = new XMLHttpRequest();
      // nxhr.open('GET' , 'testdata.php', true );
      nxhr.onload = function(){
        mycontent.innerHTML += nxhr.responseText
        
      }
      nxhr.send();

    }



      // let data =    {
      //       "id": 7,
      //       "email": "michael.lawson@reqres.in",
      //       "first_name": "Michael",
      //       "last_name": "Lawson",
      //       "avatar": "https://reqres.in/img/faces/7-image.jpg"
      //     }
  </script>


</body>
</html>